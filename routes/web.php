<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('suppliers', App\Http\Controllers\SupplierController::class)->only('index', 'show');

Route::resource('reviews', App\Http\Controllers\ReviewController::class)->only('create', 'store', 'show');
