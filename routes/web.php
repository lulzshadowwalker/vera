<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/auth/login', [LoginController::class, 'index'])->name('auth.login.index');
Route::get('/auth/register', [RegisterController::class, 'index'])->name('auth.register.index');
Route::get('/auth/otp/verify', [OtpController::class, 'index'])->name('auth.otp.index');

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy.index');
Route::get('/terms-and-conditions', [TermsAndConditionsController::class, 'index'])->name('terms-and-conditions.index');

Route::resource('suppliers', App\Http\Controllers\SupplierController::class)->only('index', 'show');

Route::resource('reviews', App\Http\Controllers\ReviewController::class)->only('create', 'store', 'show');
