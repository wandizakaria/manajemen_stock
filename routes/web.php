<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\StokBahanController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\BahanMasukController;
use App\Http\Controllers\SupplierController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home.index');

Route::resource('manajemen_user', ManajemenUserController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('stok_bahan', StokBahanController::class);
Route::resource('produksi', ProduksiController::class);
Route::resource('bahan_masuk', BahanController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

      Route::middleware('check.level:pemilik')->group(function () {
        Route::get('stok_bahan', [StokBahanController::class, 'index'])->name('stok_bahan.index');
    });

    Route::middleware('check.level:operator')->group(function () {
        Route::get('bahan_masuk', [BahanMasukController::class, 'index'])->name('bahan_masuk.index');
        Route::get('stok_bahan', [StokBahanController::class, 'index'])->name('stok_bahan.index');
        Route::get('manajemen_user', [ManajemenUserController::class, 'index'])->name('manajemen_user.index');
        Route::get('produksi', [ProduksiController::class, 'index'])->name('produksi.index');
    });

      Route::middleware('check.level:produksi')->group(function () {
        Route::get('produksi', [ProduksiController::class, 'index'])->name('produksi.index');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //untuk insert ke database

    Route::post('/bahan_masuk/store', [BahanController::class, 'store'])->name('bahan_masuk.store');
    
});

require __DIR__ . '/auth.php';

   

