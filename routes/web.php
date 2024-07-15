<?php

use App\Http\Controllers\Anggota2Controller;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home');


//Kelas CRUD
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/tambah-kelas', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/tambah-kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('/kelas/{kelas_id}', [KelasController::class, 'destroy'])->name('kelas.delete');


//Anggota CRUD
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/tambah-anggota', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');

Route::get('/users', function () {
    return view('/components/users-page', ['title' => 'Data Pengguna']);
})->name('users');

 //route::get('/anggota', [AnggotaController::class, 'index']);

 //Route::resource('/anggota', Anggota2Controller::class);