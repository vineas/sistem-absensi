<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/absen', [AbsensiController::class, 'index']);
Route::post('/absen', [AbsensiController::class, 'store']);
Route::get('/data-absen', [AbsensiController::class, 'show']);
Route::post('/absen-keluar', [AbsensiController::class, 'absenKeluar']);
Route::get('/absen-keluar', [AbsensiController::class, 'indexPulang']);
Route::get('/report', [AbsensiController::class, 'reportAbsen']);
// php artisan make:chart ReportAbsenChart
