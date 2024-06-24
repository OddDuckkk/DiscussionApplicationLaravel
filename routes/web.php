<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/session',[SessionController::class, 'index']);
Route::post('/session/login',[SessionController::class, 'login']);
Route::get('/session/logout',[SessionController::class, 'logout']);
Route::get('/session/register',[SessionController::class, 'register']);
Route::post('/session/create',[SessionController::class, 'create']);
