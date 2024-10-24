<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\UserApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// Route::middleware('auth:sanctum')->group( function () {
//     Route::resource('products', ProductApiController::class);
// });

Route::apiResource('products', ProductApiController::class);
Route::apiResource('categories', CategoryApiController::class);
Route::apiResource('orders', OrderApiController::class);
Route::apiResource('users', UserApiController::class);
