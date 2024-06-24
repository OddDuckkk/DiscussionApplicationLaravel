<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/session',[SessionController::class, 'index']);
Route::post('/session/login',[SessionController::class, 'login']);
Route::get('/session/logout',[SessionController::class, 'logout']);
Route::get('/session/register',[SessionController::class, 'register']);
Route::post('/session/create',[SessionController::class, 'create']);

Route::get('/posts',[PostController::class, 'index']);
Route::post('/posts/store',[PostController::class, 'store']);
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
