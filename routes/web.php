<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'home_index'])->name('home');
Route::get('/posts', [PostController::class,'posts_index'])->name('post');
Route::get('/users', [UserController::class,'users_index'])->name('user');