<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\CommunicationController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\OrderController;
use Illuminate\Support\Facades\Route;

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
Route::controller(LoginController::class)->prefix('/')->as('auth.')->group(function () {
    Route::get('login', 'loginForm')->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
});

Route::group(['prefix'=>'/'],function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::resource('communication',CommunicationController::class)->names('communication');
    Route::resource('order',OrderController::class)->names('order');
});


Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('room',RoomController::class)->names('room');
    Route::resource('user',UserController::class)->names('user');

});

