<?php

use App\Models\Penerbit;
use App\Models\Klasifikasi;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PerolahanController;
use App\Http\Controllers\PerolehanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PengembalianController;
use App\View\Components\klasifikasi\klasifikasiPage;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/data-peminjaman', [HomeController::class, 'getDataPeminjaman']);
Route::get('/cari-katalog', [Login::class, 'cari'])->name('cari-katalog')->middleware('guest');

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

//CRUD KUNJUNGAN
Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan')->middleware('auth');
Route::get('/tambah-kunjungan', [KunjunganController::class, 'create'])->name('tambah-kunjungan');
Route::post('/tambah-kunjungan', [KunjunganController::class, 'store'])->name('store-kunjungan')->middleware('auth');
// Route::get('/cari-kunjungan', [KunjunganController::class, 'show'])->name('show-kunjungan')->middleware('auth');
Route::get('/kunjungan/{id}/edit', [KunjunganController::class, 'edit'])->name('edit-kunjungan')->middleware('auth');
Route::put('/kunjungan/{id}/update', [KunjunganController::class, 'update'])->name('update-kunjungan')->middleware('auth');
Route::delete('/kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('delete-kunjungan')->middleware('auth');
Route::get('/kunjungan/print', [KunjunganController::class, 'print'])->name('kunjungan-print')->middleware('auth');
Route::get('/kunjungan/to-excel', [KunjunganController::class, 'excel'])->name('kunjungan-to-excel')->middleware('auth');

//CRUD PENERBIT
Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit')->middleware('auth');
Route::get('/penerbit/add', [PenerbitController::class, 'create'])->name('tambah-penerbit')->middleware('auth');
Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('store-penerbit')->middleware('auth');
Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit'])->name('edit-penerbit')->middleware('auth');
Route::put('/penerbit/{id}/update', [PenerbitController::class, 'update'])->name('update-penerbit')->middleware('auth');
Route::delete('/penerbit/{id}', [PenerbitController::class, 'destroy'])->name('delete-penerbit')->middleware('auth');

//CRUD KELAS
Route::get('/administrasi/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/administrasi/tambah-kelas', [KelasController::class, 'create'])->name('tambah-kelas');
Route::get('/administrasi/kelas/{id}/edit', [KelasController::class, 'edit'])->name('edit-kelas');
Route::put('/administrasi/kelas/{id}/update', [KelasController::class, 'update'])->name('update-kelas');
Route::delete('/administrasi/kelas/{kelas_id}', [KelasController::class, 'destroy'])->name('delete-kelas');
Route::post('/administrasi/tambah-kelas', [KelasController::class, 'store'])->name('store-kelas');

//CRUD SUMBER PEROLEHAN
Route::get('/administrasi/perolehan', [PerolehanController::class, 'index'])->name('perolehan')->middleware('auth');
Route::get('/administrasi/tambah-perolehan', [PerolehanController::class, 'create'])->name('tambah-perolehan')->middleware('auth');
Route::post('/administrasi/tambah-perolehan', [PerolehanController::class, 'store'])->name('store-perolehan')->middleware('auth');
Route::get('/administrasi/perolehan/{id}/edit', [PerolehanController::class, 'edit'])->name('edit-perolehan')->middleware('auth');
Route::put('/administrasi/perolehan/{id}/update', [PerolehanController::class, 'update'])->name('update-perolehan')->middleware('auth');
Route::delete('/administrasi/perolehan/{id}', [PerolehanController::class, 'destroy'])->name('delete-perolehan')->middleware('auth');

//CRUD KLASIFIKASI
Route::get('/administrasi/klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi');
Route::get('/administrasi/tambah-klasifikasi', [KlasifikasiController::class, 'create'])->name('tambah-klasifikasi');
Route::get('/administrasi/klasifikasi/{id}/edit', [KlasifikasiController::class, 'edit'])->name('edit-klasifikasi');
Route::put('/administrasi/klasifikasi/{id}/update', [KlasifikasiController::class, 'update'])->name('update-klasifikasi');
Route::delete('/administrasi/klasifikasi/{id_kelas}', [Klasifikasi::class, 'destroy'])->name('delete-klasifikasi');
Route::post('/administrasi/tambah-klasifikasi', [KlasifikasiController::class, 'store'])->name('store-klasifikasi');

//CRUD JENIS PELANGGARAN
Route::get('/administrasi/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran')->middleware('auth');
Route::get('/administrasi/tambah-pelanggaran', [PelanggaranController::class, 'create'])->name('tambah-pelanggaran')->middleware('auth');
Route::post('/administrasi/tambah-pelanggaran', [PelanggaranController::class, 'store'])->name('store-pelanggaran')->middleware('auth');
Route::get('/administrasi/pelanggaran/{id}/edit', [PelanggaranController::class, 'edit'])->name('edit-pelanggaran')->middleware('auth');
Route::put('/administrasi/pelanggaran/{id}/update', [PelanggaranController::class, 'update'])->name('update-pelanggaran')->middleware('auth');
Route::delete('/administrasi/pelanggaran/{id}', [PelanggaranController::class, 'destroy'])->name('delete-pelanggaran')->middleware('auth');

//CRUD PEMINJAMAN
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman')->middleware('auth');
Route::get('/tambah-peminjaman', [PeminjamanController::class, 'create'])->name('tambah-peminjaman')->middleware('auth');
Route::post('/tambah-peminjamn', [PeminjamanController::class, 'store'])->name('store-peminjaman')->middleware('auth');
Route::get('/proses-pengembalian/{id}', [PeminjamanController::class, 'proses_kembali'])->name('proses-pengembalian')->middleware('auth');
// Route::get('/koleksi/{id}/edit', [KoleksiController::class, 'edit'])->name('edit-koleksi')->middleware('auth');
// Route::put('/koleksi/{id}/update', [KoleksiController::class, 'update'])->name('update-koleksi')->middleware('auth');
// Route::delete('/koleksi/{id}', [KoleksiController::class, 'destroy'])->name('delete-koleksi')->middleware('auth');

//CRUD KATALOG
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog')->middleware('auth');
Route::get('/katalog-detail/{id}', [KatalogController::class, 'detail'])->name('katalog-detail')->middleware('auth');
Route::get('/print-katalog/{id}', [KatalogController::class, 'printPDF'])->name('print-katalog');
Route::get('/katalog/add', [KatalogController::class, 'create'])->name('tambah-katalog')->middleware('auth');
Route::post('/katalog/add', [KatalogController::class, 'store'])->name('store-katalog')->middleware('auth');
Route::get('/katalog/{id}/edit', [KatalogController::class, 'edit'])->name('edit-katalog')->middleware('auth');
Route::put('/katalog/{id}/update', [KatalogController::class, 'update'])->name('update-katalog')->middleware('auth');
Route::delete('/katalog/{id}', [KatalogController::class, 'destroy'])->name('delete-katalog')->middleware('auth');

//CRUD PENGEMBALIAN
Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian')->middleware('auth');
Route::get('/pengembalian/add', [PengembalianController::class, 'create'])->name('tambah-pengembalian')->middleware('auth');
Route::post('/pengembalian/add', [PengembalianController::class, 'store'])->name('store-pengembalian')->middleware('auth');
Route::get('/pengembalian/{id}/edit', [PengembalianController::class, 'edit'])->name('edit-pengembalian')->middleware('auth');
Route::put('/pengembalian/{id}/update', [PengembalianController::class, 'update'])->name('update-pengembalian')->middleware('auth');
Route::delete('/pengembalian/{id}', [PengembalianController::class, 'destroy'])->name('delete-pengembalian')->middleware('auth');
