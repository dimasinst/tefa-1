<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('auth.login');
        Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    Route::get('/login', [loginController::class, 'login'])->name('login');    });});

Route::get('/', [ProductController::class, 'index'])->name('index   ');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('products.show');
Route::put('product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('product/create', [ProductController::class, 'store'])->name('products.store');
Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('product.show');
    Route::get('/category/{id}', [ProductController::class, 'show'])->name('category.show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
// });

// Route untuk halaman awal (misalnya welcome pag


// Route yang hanya bisa diakses oleh admin
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
