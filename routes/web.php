<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class,'home_index'])->name('home');
Route::get('/posts', [PostController::class,'posts_index'])->name('post.index');
Route::get('/users', [UserController::class,'users_index'])->name('user.index');
Route::get('locale/{locale}', [HomeController::class, 'locale'])->name('locale')->where('locale', '[a-z]+');
Route::middleware('guest')
    ->group(function () {
        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store']);

        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    });