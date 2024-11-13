<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;

Route::apiResource('siswa', SiswaController::class);
Route::apiResource('pembayaran', PembayaranController::class);