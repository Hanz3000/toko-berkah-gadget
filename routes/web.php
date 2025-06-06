<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Produk;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\CarouselController;
use App\Models\Carousel;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\KontakController;


Route::get('/', function () {
    return redirect()->route('user.dashboard');
});

//kontak kontroller
Route::get('/dashboard', [KontakController::class, 'index'])->name('dashboard');
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
// Admin routes (dilindungi oleh middleware)
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/produk', [AdminController::class, 'index'])->name('admin.produk.index');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create');
    Route::get('/produk/tambah_admin', [ProdukController::class, 'tambah_admin'])->name('admin.produk.tambah_admin');
    Route::post('/produk', [ProdukController::class, 'store'])->name('admin.produk.store');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit');
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('admin.produk.destroy');
    Route::post('/admin/produk/tambah_admin', [ProdukController::class, 'storeAdmin'])->name('admin.produk.tambah_admin.store');
    Route::get('/users', [AdminController::class, 'userList'])->name('admin.users.index');

    // Carousel routes
    Route::get('/admin/carousels', [CarouselController::class, 'index'])->name('admin.carousels.index');
    Route::get('/admin/carousels/create', [CarouselController::class, 'create'])->name('admin.carousels.create');
    Route::post('/admin/carousels', [CarouselController::class, 'store'])->name('admin.carousels.store');
    Route::get('/admin/carousels/{carousel}/edit', [CarouselController::class, 'edit'])->name('admin.carousels.edit');
    Route::delete('/admin/carousels/{carousel}', [CarouselController::class, 'destroy'])->name('admin.carousels.destroy');
    Route::put('/admin/carousels/{carousel}', [CarouselController::class, 'update'])->name('admin.carousels.update');
});

// User routes
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    // Detail produk
    Route::get('/produk/{id}', [UserController::class, 'show'])->name('user.produk.detail');
    // Halaman favorit user
    Route::get('/favorit', [UserController::class, 'favorit'])->name('user.favorit');
    // Toggle favorit (tambah/hapus)
    Route::post('/favorit/{id}/toggle', [FavoritController::class, 'toggle'])->name('favorit.toggle');
});



// Halaman dashboard user (dashboard utama)
Route::get('/user/dashboard', function () {
    $produk = Produk::all();
    $carousels = Carousel::all();
    return view('user.dashboard', compact('produk', 'carousels'));
})->name('user.dashboard');

Route::get('/api/produk/all', [ProdukController::class, 'getAllProduk'])->name('api.produk.all');

// Auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);

// Search produk
Route::get('/search', [ProdukController::class, 'search'])->name('produk.search');
