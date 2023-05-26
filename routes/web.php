<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');

//Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::get('/test', [StartController::class, 'test'])->name('testing')->middleware('tokenCheck');
    //Posts
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('/{postId}', [PostController::class, 'showOnePost'])->name('post.show');


