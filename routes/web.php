<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;



// Route untuk halaman awal (misalnya welcome page)
Route::get('/', [ProductController::class, 'index'])->name('index');

// Route untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Route untuk memproses login
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');

// Route untuk logout (menggunakan POST method)
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Route untuk detail produk
Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('product.show');

// Route untuk kategori
Route::get('/category/{id}', [ProductController::class, 'show'])->name('category.show');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'admin'])->name('dashboard');
});
// Route yang hanya bisa diakses oleh admin
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });
