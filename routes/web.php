<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk detail produk
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');

