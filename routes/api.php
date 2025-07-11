<?php

use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Product\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth
Route::post('/register', [RegisterController::class, 'register'])
    ->name('register');
Route::post('/login', [LoginController::class, 'login'])
    ->name('login');

// Vendor
Route::post('/vendors', [VendorController::class, 'store'])
    ->name('vendor.store')
    ->middleware('auth:sanctum');

// Products
Route::resource('/products', ProductController::class)
    ->middleware('auth:sanctum')
    ->names('products')
    ->only(['index', 'store', 'show', 'update', 'destroy']);