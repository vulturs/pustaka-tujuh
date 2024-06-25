<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard']);
});

Route::get('/users', function () {
    return view('/components/users-page', ['title' => 'Data Pengguna']);
});
