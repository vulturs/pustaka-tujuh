<?php

use App\Http\Controllers\Anggota2Controller;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/tambah-anggota', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('anggota.store');
//Route::resource('anggota', AnggotaController::class);


Route::get('/users', function () {
    return view('/components/users-page', ['title' => 'Data Pengguna']);
})->name('users');

 //route::get('/anggota', [AnggotaController::class, 'index']);

 //Route::resource('/anggota', Anggota2Controller::class);