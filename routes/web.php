<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SignupController;
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

// Route cho trang chủ
Route::get('/', [IndexController::class, 'index']);

// Route cho trang đăng ký
Route::get('/signup', [SignupController::class, 'index']);

// Route cho trang đăng nhập
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'checkLogin']);

// Route thuong cho web
Route::get('/search', function () {return view('search');});
Route::post('/signup', [LoginController::class, 'signup']) -> name('signup.route');
//trang test
route::get('/test', [LoginController::class, 'test'])->middleware('check.login.middleware');
//route logout
Route::get('/logout', [LoginController::class, 'logout']);