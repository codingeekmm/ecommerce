<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\OrderItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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

});

require __DIR__.'/auth.php';
