<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authentication;

Route::get('/crud', function () {
    return view('welcome');
});
Route::get('/card', function () {
    return view('card');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-form', [AuthController::class, 'submitLogin'])->name('login-form');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register-form', [AuthController::class, 'submitRegister'])->name('register-form');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(Authentication::class)->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});
