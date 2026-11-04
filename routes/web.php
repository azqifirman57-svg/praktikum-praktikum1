<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Surat Masuk
Route::resource('/surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id'])
    ->only([
        'index', 'create', 'store',
        'show', 'edit', 'update', 'destroy'
    ]);

// Surat Keluar
Route::resource('/surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id'])
    ->only([
        'index', 'create', 'store',
        'show', 'edit', 'update', 'destroy'
    ]);