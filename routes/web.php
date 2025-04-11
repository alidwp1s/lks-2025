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
Route::get('/login', function () {
    return view('login');
});
Route::get('/games', function () {
    return view('games');
});
Route::get('/admin', function () {
    return view('dashboard_admin');
});
Route::get('/developer', function () {
    return view('dashboard_dev');
});
Route::get('/player', function () {
    return view('dashboard_player');
});
