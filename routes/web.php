<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('auth.login');
        Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
        Route::get('/login', [loginController::class, 'login'])->name('login');
    });
});

Route::get('/', [DashboardController::class, 'admin'])->name('admin.dashboard');

// Pastikan untuk menambahkan middleware RedirectIfAuthenticated di sini

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('product.show');
    Route::get('/category/{id}', [ProductController::class, 'show'])->name('category.show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});
