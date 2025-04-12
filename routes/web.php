<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
