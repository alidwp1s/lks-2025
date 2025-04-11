<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('login_admin');
});
Route::get('/user', function () {
    return view('login_user');
});

// Dashboard
Route::get('/admin/dashboard', function () {
    return view('dashboard_admin');
});
Route::get('/developer/dashboard', function () {
    return view('dashboard_dev');
});
Route::get('/player/dashboard', function () {
    return view('dashboard_player');
});
