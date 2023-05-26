<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\LoginController;
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
    Route::get('/test', [StartController::class, 'index'])->name('home')->middleware('tokenCheck');
    Route::get('/login', [LoginController::class, 'index'])->name('login');


