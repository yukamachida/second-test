<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);




Route::post('/products/register', [ProductController::class, 'register']);
Route::post('/products/search', [ProductController::class, 'search']);
Route::post('/products/{productId}', [ProductController::class, 'confirm']);