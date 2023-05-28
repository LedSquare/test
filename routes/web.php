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
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'store')->name('login.store');
});
    //Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register',  'index')->name('register');
    Route::post('/register', 'store')->name('register.store');
});


Route::controller(PostController::class)->group(function () {
    Route::get('/',                 'index')        ->name('post');
    Route::get('/post/create',      'create')       ->name('post.create');
    Route::get('/post/{post_id}',   'showOnePost')  ->name('post.show');
    Route::put('/post/create',      'storePost')    ->name('post.create.store');
    Route::get('/edit',             'edit')         ->name('post.edit');
    Route::post('/edit',            'update')       ->name('post.edit.save');

});



