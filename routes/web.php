<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Login::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/koleksi', [KoleksiController::class, 'show'])->name('koleksi');
