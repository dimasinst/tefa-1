<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['guest'])->group(function () {
    // Route::controller(LoginController::class)->group(function () {
        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('auth.authenticate');
    });
// });

Route::get('/', [ProductController::class, 'index'])->name('index');



Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('detail');
Route::put('product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('product/create', [ProductController::class, 'store'])->name('products.store');
Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


//index


Route::get('/category/{id}', [ProductController::class, 'show'])->name('category.show');
Route::get('/about', [ProductController::class, 'about'])->name('about');
Route::get('/produk', [ProductController::class, 'produk'])->name('produk');

