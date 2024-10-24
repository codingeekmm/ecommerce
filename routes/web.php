<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\OrderItemController;

// Change welcome page to product list
Route::get('/', [ProductController::class, 'index']);

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
