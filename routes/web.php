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
