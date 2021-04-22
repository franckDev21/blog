<?php

use App\Http\Controllers\UserController;
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


Route::get('/', fn()=> view('user.home'))->name('home_');

Route::get('/register', fn () => view('user.register'))->name('register_');

Route::get('/login', fn () => view('user.login'))->name('login_');

// users
Route::get('/admin',[UserController::class,'index'])->name('admin_');
Route::get('/admin/create', [UserController::class,'create'])->name('admin_create_');
Route::post('/admin', [UserController::class, 'store']);
Route::get('/user/{user}', [UserController::class, 'show']);
