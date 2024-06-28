<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users');
