<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::resource('users', UserController::class);

// Category Routes
Route::resource('categories', CategoryController::class);

// Product Routes
Route::resource('products', ProductController::class);

// Order Routes
Route::resource('orders', OrderController::class);

// Order Item Routes
Route::resource('order-items', OrderItemController::class);
