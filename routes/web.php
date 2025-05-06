<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DitaController;
use App\Http\Controllers\RamaController;
use App\Http\Controllers\DestinasiController;

//
// ─── HALAMAN UMUM / PUBLIK ──────────────────────────────────────────────
//
Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', fn () => view('welcome'));
Route::get('/about', fn () => view('layouts.about'));
Route::get('/contact', fn () => view('layouts.contact'));
Route::get('/login', fn () => view('auth.login'));

//
// ─── HALAMAN PRODUK ─────────────────────────────────────────────────────
//
Route::get('/products', fn () => view('products.index'));
Route::get('/products/{id}', fn ($id) => view('products.show', ['id' => $id]));

//
// ─── HALAMAN TAMBAHAN ──────────────────────────────────────────────────
//
Route::get('/destinasi', fn () => view('destinasi'));
Route::get('/product', fn () => view('product'));

//
// ─── CONTROLLER CUSTOM ─────────────────────────────────────────────────
//
Route::get('/rama', [RamaController::class, 'tampilkan']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list_product', [ListProductController::class, 'tampilkan']);
Route::get('/listbarang/{id}/{nama}', [ListProductController::class, 'tampilkan']);

//
// ─── ADMIN ─────────────────────────────────────────────────────────────
//
Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Halaman statis admin
    Route::get('/home', fn () => view('layouts.home'));
    Route::get('/about', fn () => view('layouts.about'));
    Route::get('/contact', fn () => view('layouts.contact'));
    Route::get('/login', fn () => view('auth.login'));
    Route::get('/register', fn () => view('auth.register'));
    Route::get('/tugaspublic', fn () => view('tugaspublic'));

    // Data destinasi (admin)
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');

    // Produk (admin)
    Route::get('/products', fn () => view('products.index'));
    Route::get('/products/create', fn () => view('products.create'));
    Route::get('/products/{id}', fn ($id) => view('products.show', ['id' => $id]));
    Route::get('/products/{id}/edit', fn ($id) => view('products.edit', ['id' => $id]));

    // User list (dummy)
    Route::get('/users', fn () => 'Admin Users');
});
