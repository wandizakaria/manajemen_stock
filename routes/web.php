<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\BahanMasukController;
use App\Http\Controllers\StokBahanController;
use App\Http\Controllers\ProduksiController;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home.index');

Route::resource('manajemen_user', ManajemenUserController::class);
Route::resource('bahan_masuk', BahanMasukController::class);
Route::resource('stok_bahan', StokBahanController::class);
Route::resource('produksi', ProduksiController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/bahan_masuk', [BahanMasukController::class, 'show'])->name('bahan_masuk.show');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__ . '/auth.php';
