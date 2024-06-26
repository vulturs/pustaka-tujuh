<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', function () {
    return view('/components/users-page', ['title' => 'Data Pengguna']);
})->name('users');
