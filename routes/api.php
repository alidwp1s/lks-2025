<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/games', [GameController::class, 'index']); // Contoh: lihat game
    Route::post('/games', [GameController::class, 'store']); // Upload game (dev)
    Route::get('/users', [UserController::class, 'index']); // Kelola user (admin)
    Route::post('/play/{game}', [GameController::class, 'play']); // Mainkan game (player)
});
