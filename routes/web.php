<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\KoleksiController;
use App\Models\Klasifikasi;
use App\View\Components\klasifikasi\klasifikasiPage;

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

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/tambah-kelas', [KelasController::class, 'create'])->name('tambah-kelas');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('edit-kelas');
Route::put('/kelas/{id}/update', [KelasController::class, 'update'])->name('update-kelas');
Route::delete('/kelas/{kelas_id}', [KelasController::class, 'destroy'])->name('delete-kelas');
Route::post('/tambah-kelas', [KelasController::class, 'store'])->name('store-kelas');

//CRUD KLASIFIKASI
Route::get('/klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi');
Route::get('/tambah-klasifikasi', [KlasifikasiController::class, 'create'])->name('tambah-klasifikasi');
Route::get('/klasifikasi/{id}/edit', [KlasifikasiController::class, 'edit'])->name('edit-klasifikasi');
Route::put('/klasifikasi/{id}/update', [KlasifikasiController::class, 'update'])->name('update-klasifikasi');
Route::delete('/klasifikasi/{id_kelas}', [Klasifikasi::class, 'destroy'])->name('delete-klasifikasi');
Route::post('/tambah-klasifikasi', [KlasifikasiController::class, 'store'])->name('store-klasifikasi');