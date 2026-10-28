<?php

use App\Http\Controllers\Auth\MemberAuthController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Profile\Profile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [MemberAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [MemberAuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/teste', Dashboard::class)->name('teste');
    Route::get('/teste2', Dashboard::class)->name('teste2');
    Route::get('/Profile', Profile::class)->name('Profile');
    Route::post('/logout', [MemberAuthController::class, 'logout'])->name('logout');
});
