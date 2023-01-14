<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeartController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\SearchController;
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



Auth::routes();




Route::resource('/post','App\Http\Controllers\PostsController');

Route::group(['middleware' => 'auth'], function () {
   
    Route::resource('/profile', profileController::class)->name('index','profile');

    Route::get('/',[HomeController::class, 'index'])->name('index');
    /* Follow */
    Route::post('/follow',[FollowController::class, 'follow'])->name('follow');
    Route::post('/unfollow',[FollowController::class,'unfollow'])->name('unfollow');

    /*Heart */

    Route::post('/heart',[HeartController::class,'heart'])->name('heart');
    Route::post('/unheart',[HeartController::class,'unheart'])->name('unheart');


    Route::get('/search',[SearchController::class,'search'])->name('search');
});