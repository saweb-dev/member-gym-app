<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberAuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'access_code' => ['required', 'string'],
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        $tenant = Tenant::findByAccessCode($data['access_code']);
        if (!$tenant) {
            return back()
                ->withErrors(['access_code' => "Code d'accès invalide."])
                ->onlyInput('access_code', 'username');
        }
        $tenant->makeCurrent();
        if (Auth::guard('web')->attempt([
            'username' => $data['username'],
            'password' => $data['password'],
        ])){
            $request->session()->regenerate();
            $request->session()->put('tenant_id', $tenant->id);

            return redirect()->intended(route('dashboard'));
        }
        Tenant::forgetCurrent();
        return back()
                ->withErrors(['username' => "Identifiants incorrects."])
                ->onlyInput('access_code', 'username');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Tenant::forgetCurrent();

        return redirect()->route('login');
    }
}
