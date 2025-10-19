<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ✅ Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

use App\Http\Controllers\UmkmController;
use App\Http\Controllers\DeveloperController;

Route::prefix('umkm')->group(function() {
    Route::get('/dashboard', [UmkmController::class, 'dashboard'])->name('umkm.dashboard');
    Route::get('/proyek', [UmkmController::class, 'proyek'])->name('umkm.proyek');
    Route::get('/pesan', [UmkmController::class, 'pesan'])->name('umkm.pesan');
    Route::get('/profil', [UmkmController::class, 'profil'])->name('umkm.profil');
});

Route::prefix('developer')->group(function() {
    Route::get('/dashboard', [DeveloperController::class, 'dashboard'])->name('developer.dashboard');
    Route::get('/proyek', [DeveloperController::class, 'proyek'])->name('developer.proyek');
    Route::get('/pesan', [DeveloperController::class, 'pesan'])->name('developer.pesan');
    Route::get('/profil', [DeveloperController::class, 'profil'])->name('developer.profil');
});
