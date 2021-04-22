<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn()=> view('user.home'))->name('home_');
Route::get('/register', fn () => view('user.register'))->name('register_');
Route::get('/login', fn () => view('user.login'))->name('login_');

// Employer
Route::get('admin',[EmployerController::class,'index'])->name('admin_');
Route::get('admin/create', [EmployerController::class,'create'])->name('admin_create_');
Route::post('admin', [EmployerController::class, 'store']);
Route::get('user/{user}', [EmployerController::class, 'show']);
Route::get('user/{user}/edit', [EmployerController::class, 'edit']);
Route::patch('user/{user}',[EmployerController::class,'update']);
Route::delete('/user/{user}', [EmployerController::class, 'destroy']);