<?php

use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebControlller;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[WebControlller::class,'show'])->name('index');
Route::resource('/chatroom',ChatRoomController::class);
