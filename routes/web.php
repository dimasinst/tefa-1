<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProfileController;

// Rute untuk login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('auth.authenticate');
});

// Rute logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Rute untuk halaman utama
Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/home', fn() => redirect()->route('index'))->name('home');

// Rute lainnya
Route::get('/inquery', [ResellerController::class, 'showContactForm'])->name('sales.contact');
Route::get('/artikel', [TestimonialController::class, 'userIndex'])->name('other.index');

// Rute untuk kategori produk
Route::prefix('categories')->group(function () {
    Route::get('/cvt', [ProductController::class, 'cvt'])->name('categories.cvt');
    Route::get('/valve', [ProductController::class, 'valve'])->name('categories.valve');
    Route::get('/clutch', [ProductController::class, 'clutch'])->name('categories.clutch');
    Route::get('/sentri', [ProductController::class, 'sentri'])->name('categories.sentri');
    Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('detail'); // Rute untuk detail produk

});

Route::prefix('profile')->group(function () {
Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
Route::post('/admin/edit', [ProfileController::class, 'update'])->name('admin.profile.update');
});

// Rute untuk user (reseller)
Route::prefix('resellers')->group(function () {
    Route::post('/', [ResellerController::class, 'store'])->name('resellers.store');
    Route::get('/', [ResellerController::class, 'indexUser'])->name('reseller.index');
    Route::get('/{id}', [ResellerController::class, 'showUser'])->name('reseller.show');
});

// Rute admin dengan autentikasi
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    // Rute untuk reseller
    Route::prefix('resellers')->group(function () {
        Route::get('/', [ResellerController::class, 'indexAdmin'])->name('admin.resellers.index');
        Route::get('/{id}', [ResellerController::class, 'showAdmin'])->name('admin.resellers.show');
        Route::get('/{id}/edit', [ResellerController::class, 'editAdmin'])->name('admin.resellers.edit');
        Route::put('/{id}', [ResellerController::class, 'updateAdmin'])->name('admin.resellers.update');
        Route::delete('/{id}', [ResellerController::class, 'destroyAdmin'])->name('admin.resellers.delete');
        Route::post('/{reseller}/approve', [ResellerController::class, 'approve'])->name('admin.resellers.approve');
        Route::post('/{reseller}/reject', [ResellerController::class, 'reject'])->name('admin.resellers.reject');
        Route::get('/admin/resellers/pending', [ResellerController::class, 'pending'])->name('admin.resellers.pending');
    });

    // Rute untuk produk
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'indexAdmin'])->name('admin.products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('/create/sentri', [ProductController::class, 'createSentri'])->name('products.createSentri');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::post('/Sentristore', [ProductController::class, 'sentristore'])->name('products.sentri.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    });

    // Rute untuk testimoni
    Route::prefix('testimonials')->group(function () {
        Route::get('/', [TestimonialController::class, 'adminIndex'])->name('admin.testimoni.index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('admin.testimoni.create');
        Route::post('/', [TestimonialController::class, 'store'])->name('admin.testimoni.store');
        Route::get('/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimoni.edit');
        Route::put('/{id}', [TestimonialController::class, 'update'])->name('admin.testimoni.update');
        Route::delete('/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimoni.destroy');
    });
});
