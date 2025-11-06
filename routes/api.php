<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

// Route untuk login (tidak perlu autentikasi)
Route::post('/login', [AuthController::class, 'login']);

// Route yang memerlukan autentikasi Sanctum
Route::middleware('auth:sanctum')->group(function () {
    // Route untuk mendapatkan data mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
});