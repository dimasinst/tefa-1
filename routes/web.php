<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk detail produk
Route::get('product/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/', [ProductController::class, 'index']);
Route::get('/category/{id}', [ProductController::class, 'show'])->name('category.show');
