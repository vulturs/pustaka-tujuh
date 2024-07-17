<?php

use App\Models\Penerbit;
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
use App\Http\Controllers\PenerbitController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');
Route::get('/koleksi', [KoleksiController::class, 'show'])->name('koleksi')->middleware('auth');

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota')->middleware('auth');
Route::get('/tambah-anggota', [AnggotaController::class, 'create'])->name('tambah-anggota')->middleware('auth');
Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('store-anggota')->middleware('auth');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('edit-anggota')->middleware('auth');
Route::put('/anggota/{id}/update', [AnggotaController::class, 'update'])->name('update-anggota')->middleware('auth');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete-anggota')->middleware('auth');

Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit')->middleware('auth');
Route::get('/penerbit/add', [PenerbitController::class, 'create'])->name('tambah-penerbit')->middleware('auth');
Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('store-penerbit')->middleware('auth');
Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit'])->name('edit-penerbit')->middleware('auth');
Route::put('/penerbit/{id}/update', [PenerbitController::class, 'update'])->name('update-penerbit')->middleware('auth');
Route::delete('/penerbit/{id}', [PenerbitController::class, 'destroy'])->name('delete-penerbit')->middleware('auth');

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
