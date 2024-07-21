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
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PelanggaranController;
use App\Models\Klasifikasi;
use App\View\Components\klasifikasi\klasifikasiPage;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PerolahanController;
use App\Http\Controllers\PerolehanController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

//CRUD USERS
Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');
Route::get('/tambah-users', [UserController::class, 'create'])->name('tambah-users')->middleware('auth');
Route::post('/tambah-users', [UserController::class, 'store'])->name('store-users')->middleware('auth');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit-users')->middleware('auth');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('update-users')->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete-users')->middleware('auth');

//CRUD KOLEKSI
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi')->middleware('auth');
Route::get('/tambah-koleksi', [KoleksiController::class, 'create'])->name('tambah-koleksi')->middleware('auth');
Route::post('/tambah-koleksi', [KoleksiController::class, 'store'])->name('store-koleksi')->middleware('auth');
Route::get('/koleksi/{id}/edit', [KoleksiController::class, 'edit'])->name('edit-koleksi')->middleware('auth');
Route::put('/koleksi/{id}/update', [KoleksiController::class, 'update'])->name('update-koleksi')->middleware('auth');
Route::delete('/koleksi/{id}', [KoleksiController::class, 'destroy'])->name('delete-koleksi')->middleware('auth');

//CRUD ANGGOTA
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota')->middleware('auth');
Route::get('/tambah-anggota', [AnggotaController::class, 'create'])->name('tambah-anggota')->middleware('auth');
Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('store-anggota')->middleware('auth');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('edit-anggota')->middleware('auth');
Route::put('/anggota/{id}/update', [AnggotaController::class, 'update'])->name('update-anggota')->middleware('auth');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete-anggota')->middleware('auth');

//CRUD JENIS PENGUNJUNG
Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan')->middleware('auth');
Route::get('/tambah-kunjungan', [KunjunganController::class, 'create'])->name('tambah-kunjungan')->middleware('auth');
Route::post('/tambah-kunjungan', [KunjunganController::class, 'store'])->name('store-kunjungan')->middleware('auth');
Route::get('/kunjungan/{id}/edit', [KunjunganController::class, 'edit'])->name('edit-kunjungan')->middleware('auth');
Route::put('/kunjungan/{id}/update', [KunjunganController::class, 'update'])->name('update-kunjungan')->middleware('auth');
Route::delete('/kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('delete-kunjungan')->middleware('auth');

//CRUD PENERBIT
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit')->middleware('auth');
Route::get('/penerbit/add', [PenerbitController::class, 'create'])->name('tambah-penerbit')->middleware('auth');
Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('store-penerbit')->middleware('auth');
Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit'])->name('edit-penerbit')->middleware('auth');
Route::put('/penerbit/{id}/update', [PenerbitController::class, 'update'])->name('update-penerbit')->middleware('auth');
Route::delete('/penerbit/{id}', [PenerbitController::class, 'destroy'])->name('delete-penerbit')->middleware('auth');

//CRUD KELAS
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/tambah-kelas', [KelasController::class, 'create'])->name('tambah-kelas');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('edit-kelas');
Route::put('/kelas/{id}/update', [KelasController::class, 'update'])->name('update-kelas');
Route::delete('/kelas/{kelas_id}', [KelasController::class, 'destroy'])->name('delete-kelas');
Route::post('/tambah-kelas', [KelasController::class, 'store'])->name('store-kelas');

//CRUD SUMBER PEROLEHAN
Route::get('/perolehan', [PerolehanController::class, 'index'])->name('perolehan')->middleware('auth');
Route::get('/tambah-perolehan', [PerolehanController::class, 'create'])->name('tambah-perolehan')->middleware('auth');
Route::post('/tambah-perolehan', [PerolehanController::class, 'store'])->name('store-perolehan')->middleware('auth');
Route::get('/perolehan/{id}/edit', [PerolehanController::class, 'edit'])->name('edit-perolehan')->middleware('auth');
Route::put('/perolehan/{id}/update', [PerolehanController::class, 'update'])->name('update-perolehan')->middleware('auth');
Route::delete('/perolehan/{id}', [PerolehanController::class, 'destroy'])->name('delete-perolehan')->middleware('auth');

//CRUD KLASIFIKASI
Route::get('/klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi');
Route::get('/tambah-klasifikasi', [KlasifikasiController::class, 'create'])->name('tambah-klasifikasi');
Route::get('/klasifikasi/{id}/edit', [KlasifikasiController::class, 'edit'])->name('edit-klasifikasi');
Route::put('/klasifikasi/{id}/update', [KlasifikasiController::class, 'update'])->name('update-klasifikasi');
Route::delete('/klasifikasi/{id_kelas}', [Klasifikasi::class, 'destroy'])->name('delete-klasifikasi');
Route::post('/tambah-klasifikasi', [KlasifikasiController::class, 'store'])->name('store-klasifikasi');

//CRUD JENIS PELANGGARAN
Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran')->middleware('auth');
Route::get('/tambah-pelanggaran', [PelanggaranController::class, 'create'])->name('tambah-pelanggaran')->middleware('auth');
Route::post('/tambah-pelanggaran', [PelanggaranController::class, 'store'])->name('store-pelanggaran')->middleware('auth');
Route::get('/pelanggaran/{id}/edit', [PelanggaranController::class, 'edit'])->name('edit-pelanggaran')->middleware('auth');
Route::put('/pelanggaran/{id}/update', [PelanggaranController::class, 'update'])->name('update-pelanggaran')->middleware('auth');
Route::delete('/pelanggaran/{id}', [PelanggaranController::class, 'destroy'])->name('delete-pelanggaran')->middleware('auth');