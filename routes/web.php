<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Produk;
use App\Http\Controllers\Auth\LoginController;



Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
Route::get('/produk/{id}', [UserController::class, 'show'])->name('user.produk.detail');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/produk', [ProdukController::class, 'index'])->name('admin.produk.index'); // Menampilkan daftar produk
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create'); // Form tambah produk
    Route::post('/produk', [ProdukController::class, 'store'])->name('admin.produk.store'); // Simpan produk ke database
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit'); // Form edit produk
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('admin.produk.update'); // Update produk
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('admin.produk.destroy'); // Hapus produk
});

Route::get('/user/dashboard', function () {
    $produk = Produk::all();
    return view('user.dashboard', compact('produk'));
})->name('user.dashboard');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);


Route::post('/admin/produk', [App\Http\Controllers\Admin\ProdukController::class, 'store'])->name('admin.produk.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store');
