<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsAndConditionsController;
use Illuminate\Support\Facades\Route;

Route::get('/robots.txt', function () {
    if (app()->environment('production')) {
        $content = "User-agent: *\nDisallow:";
    } else {
        $content = "User-agent: *\nDisallow: /";
    }

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Authentication Routes (Guest Only)
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/auth/login', [LoginController::class, 'index'])->name(
        'auth.login.index',
    );
    Route::post('/auth/login', [LoginController::class, 'store'])->name(
        'auth.login.store',
    );
    Route::get('/auth/login/verify', [LoginController::class, 'verify'])->name(
        'auth.login.verify',
    );
    Route::post('/auth/login/verify', [
        LoginController::class,
        'confirmOtp',
    ])->name('auth.login.confirm-otp');
    Route::post('/auth/login/resend', [
        LoginController::class,
        'resendOtp',
    ])->name('auth.login.resend-otp');

    // Register
    Route::get('/auth/register', [RegisterController::class, 'index'])->name(
        'auth.register.index',
    );
    Route::post('/auth/register', [RegisterController::class, 'store'])->name(
        'auth.register.store',
    );
    Route::get('/auth/register/verify', [
        RegisterController::class,
        'verify',
    ])->name('auth.register.verify');
    Route::post('/auth/register/verify', [
        RegisterController::class,
        'confirmOtp',
    ])->name('auth.register.confirm-otp');
    Route::post('/auth/register/resend', [
        RegisterController::class,
        'resendOtp',
    ])->name('auth.register.resend-otp');
});

// Logout (Authenticated Only)
Route::post('/auth/logout', [LoginController::class, 'destroy'])
    ->name('auth.logout')
    ->middleware('auth');

// Dashboard (Authenticated Only)
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware('auth')
    ->name('dashboard');

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name(
    'privacy-policy.index',
);
Route::get('/terms-and-conditions', [
    TermsAndConditionsController::class,
    'index',
])->name('terms-and-conditions.index');

// Route::resource(
//     "suppliers",
//     App\Http\Controllers\SupplierController::class,
// )->only("index", "show");

Route::get('/suppliers', [
    App\Http\Controllers\SupplierController::class,
    'index',
])->name('suppliers.index');
Route::get('/suppliers/{supplier:slug}', [
    App\Http\Controllers\SupplierController::class,
    'show',
])->name('suppliers.show');

Route::get('/suppliers/{supplier:slug}/reviews/create', [
    App\Http\Controllers\ReviewController::class,
    'create',
])->name('suppliers.reviews.create');

Route::resource('reviews', App\Http\Controllers\ReviewController::class)->only(
    'create',
    'store',
    'show',
);
