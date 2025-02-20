<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default homepage route (optional, modify if needed)
Route::get('/', function () {
    return view('welcome');
});

// Route to display products (movies or restaurants)
Route::get('/products', [ProductController::class, 'index']);