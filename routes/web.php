<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KoleksiController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/koleksi', [KoleksiController::class, 'show'])->name('koleksi');

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/tambah-anggota', [AnggotaController::class, 'create'])->name('tambah-anggota');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('edit-anggota');
Route::put('/anggota/{id}/update', [AnggotaController::class, 'update'])->name('update-anggota');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete-anggota');
Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('store-anggota');
