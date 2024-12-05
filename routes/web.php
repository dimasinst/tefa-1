<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/artikel', [TestimonialController::class, 'userIndex'])->name('other.index');


// route
// Route untuk user mengajukan reseller
Route::post('resellers', [ResellerController::class, 'store'])->name('resellers.store');
Route::get('/resellers', [ResellerController::class, 'indexUser'])->name('reseller.index');
Route::get('/resellers/{id}', [ResellerController::class, 'showUser'])->name('reseller.show');

// Untuk Admin (semua reseller)
Route::get('/admin/resellers', [ResellerController::class, 'indexAdmin'])->name('admin.resellers.index');
    
// Detail reseller untuk admin
Route::get('/admin/resellers/{id}', [ResellerController::class, 'showAdmin'])->name('admin.resellers.show');

// Edit reseller untuk admin
Route::get('/resellers/{id}/edit', [ResellerController::class, 'editAdmin'])->name('admin.resellers.edit');

// Update reseller untuk admin

// Hapus reseller untuk admin
Route::delete('/resellers/{id}', [ResellerController::class, 'destroyAdmin'])->name('admin.resellers.delete');
    Route::put('/resellers/{id}', [ResellerController::class, 'updateAdmin'])->name('admin.resellers.update');
    Route::post('/admin/resellers/{reseller}/approve', [ResellerController::class, 'approve'])->name('admin.resellers.approve');
    Route::post('/admin/resellers/{reseller}/reject', [ResellerController::class, 'reject'])->name('admin.resellers.reject');

    
    Route::prefix('products')->group(function () {
    Route::post('store', [ProductController::class, 'store'])->name('products.store');
    Route::post('Sentristore', [ProductController::class, 'sentristore'])->name('products.sentri.store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('create', [ProductController::class, 'create'])->name('products.create');
    Route::get('create/sentri', [ProductController::class, 'createSentri'])->name('products.createSentri');
    Route::get('product/show/{id}', [ProductController::class, 'showProduct'])->name('detail'); // Rute untuk detail produk
});

Route::get('/admin/products', [ProductController::class, 'indexAdmin'])->name('admin.products.index');



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


Route::prefix('admin')->group(function () {
    Route::get('/admin/testimoni', [TestimonialController::class, 'adminIndex'])->name('admin.testimoni.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimoni.create');
    Route::post('/testimonials', [TestimonialController::class, 'store'])->name('admin.testimoni.store');
    Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimoni.edit');
    Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('admin.testimoni.update');
    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimoni.destroy');
});




