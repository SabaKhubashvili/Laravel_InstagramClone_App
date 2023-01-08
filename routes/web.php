<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\profileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('index');

Auth::routes();

Route::resource('/profile', profileController::class)->name('index','profile');

// Route::post('/posts/{post}/like', [App\Http\Controllers\HomeController::class, 'heart'])->name('heart');

Route::resource('/post','App\Http\Controllers\PostsController');

