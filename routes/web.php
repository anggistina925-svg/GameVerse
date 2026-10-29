<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/penulis', [HomeController::class, 'penulis'])->name('penulis');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

Route::get('/kategori', [ArtikelController::class, 'kategori'])->name('artikel.kategori');
Route::get('/artikel/{id}', [ArtikelController::class, 'detail'])
    ->name('artikel.detail');