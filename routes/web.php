<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk Profile Utama (Landing Page)
Route::get('/', function () {
    return view('profile_nunyai'); 
});

// Route untuk Daftar UMKM
Route::get('/umkm', [App\Http\Controllers\UmkmController::class, 'index']);
