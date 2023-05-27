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
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    //Register

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.save');


    //Posts

    Route::get('/', [PostController::class, 'index'])->name('post');
    Route::get('/posts', [PostController::class, 'showOnePost'])->name('post.show');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::put('/create', [PostController::class, 'storePost'])->name('post.create.store');

    Route::get('/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/edit', [PostController::class, 'update'])->name('post.edit.save');

    Route::get('/test', [StartController::class, 'test'])->name('testing');


