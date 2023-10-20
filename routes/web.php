<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BukuController;

Route::get('/', [TestController::class, 'beranda']);
Route::get('/about', [TestController::class, 'about']);
Route::get('/index', [TestController::class, 'index']);


Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');


Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');


Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');


Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');
