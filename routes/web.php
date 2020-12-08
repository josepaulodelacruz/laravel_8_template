<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/user/{user}/view', [UserPostController::class, 'index'])->name('post.show');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store'])->name('posts');
Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('post.delete');

Route::post('/posts/{post}/like', [PostLikeController::class, 'store'])->name('post.like');
Route::delete('/posts/{post}/like', [PostLikeController::class, 'destroy'])->name('post.unlike');


