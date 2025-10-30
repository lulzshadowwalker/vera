<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [LoginController::class, 'index'])->name('auth.login.index');
Route::get('/auth/register', [RegisterController::class, 'index'])->name('auth.register.index');
Route::get('/auth/otp/verify', [OtpController::class, 'index'])->name('auth.otp.index');

Route::resource('suppliers', App\Http\Controllers\SupplierController::class)->only('index', 'show');

Route::resource('reviews', App\Http\Controllers\ReviewController::class)->only('create', 'store', 'show');
