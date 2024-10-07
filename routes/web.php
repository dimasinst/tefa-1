<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResellerController;
// Rute untuk login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login'); // Rute untuk form login
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('auth.authenticate'); // Rute untuk autentikasi pengguna
});

// Rute untuk halaman utama
Route::get('/', [ProductController::class, 'index'])->name('index');

// Rute untuk home
 Route::get('/home', function () {
     return redirect()->route('index');
 })->name('home');

// Rute lainnya
Route::get('/contact', function () {
    return view('sales.contact'); // Rute untuk halaman kontak
})->name('sales.contact');

Route::get('/about', function () {
    return view('about'); // Rute untuk halaman kontak
})->name('about');



Route::prefix('resellers')->group(function () {
    Route::get('/', [ResellerController::class, 'index'])->name('resellers.index');
    Route::get('/create', [ResellerController::class, 'create'])->name('resellers.create');
    Route::post('/store', [ResellerController::class, 'store'])->name('resellers.store');
    Route::get('/{id}/edit', [ResellerController::class, 'edit'])->name('resellers.edit');
    Route::put('/{id}', [ResellerController::class, 'update'])->name('resellers.update');    
    Route::delete('/{reseller}', [ResellerController::class, 'destroy'])->name('resellers.destroy');
    Route::get('/{id}', [ResellerController::class, 'userShow'])->name('user.resellers.show');
});
Route::get('admin/resellers/{id}', [ResellerController::class, 'show'])->name('admin.resellers.show');

// Rute untuk produk
Route::prefix('products')->group(function () {
    Route::get('create', [ProductController::class, 'create'])->name('products.create');
    Route::post('store', [ProductController::class, 'store'])->name('products.store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('detail'); // Rute untuk detail produk


});




// Rute admin yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('admin.dashboard'); // Rute untuk dashboard admin
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Rute untuk logout

});
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk kategori
Route::get('/cvt', [ProductController::class, 'cvt'])->name('categories.cvt');
Route::get('/valve', [ProductController::class, 'valve'])->name('categories.valve');
Route::get('/clutch', [ProductController::class, 'clutch'])->name('categories.clutch');
Route::get('/sentri', [ProductController::class, 'sentri'])->name('categories.sentri');

