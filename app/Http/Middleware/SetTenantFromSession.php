<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetTenantFromSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($tenantId = $request->session()->get('tenant_id')) {
            $tenant = Tenant::find($tenantId);
            if ($tenant) {
                $tenant->makeCurrent();
            } else {
                $request->session()->forget('tenant_id');
            }
        }
        return $next($request);
    }
}
