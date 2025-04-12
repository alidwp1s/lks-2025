<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

//! Login Pages
Route::get('/user', function () {
    return view('login_user');
})->name('login');
Route::get('/admin', function () {
    return view('login_admin');
})->name('login.admin');

Route::middleware('auth:web')->group(function () {
    Route::get('/user/dashboard', function () {
        return view('dashboard_player');
    });
});

Route::middleware('auth:administrator')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard_admin');
    });
});

Route::middleware('auth:developer')->group(function () {
    Route::get('/developer/dashboard', function () {
        return view('dashboard_dev');
    });
});

Route::get('/user', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/user', [UserAuthController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/user/dashboard', [UserController::class, 'login']);
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('dashboard_player');

Route::post('/admin/dashboard', [AdministratorController::class, 'login']);
Route::get('/admin/dashboard', [AdministratorController::class, 'dashboard'])->name('admin.dashboard');