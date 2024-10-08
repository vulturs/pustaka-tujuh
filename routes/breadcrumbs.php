<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Data Kelas
Breadcrumbs::for('kelas', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Data Kelas', route('kelas'));
});

// Home > Data Anggota
Breadcrumbs::for('anggota', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Data Anggota', route('anggota'));
});

// Home > Tambah Anggota
Breadcrumbs::for('anggota/create-anggota', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Tambah Anggota', route('create-anggota'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('home'));
});

// Home > Users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Data Pengguna', route('users'));
});

// Home > Koleksi
Breadcrumbs::for('koleksi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Koleksi', route('koleksi'));
});

// Home > Anggota
// Breadcrumbs::for('anggota', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Anggota', route('anggota'));
// });

// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});

// Home > Blog > [Category]
Breadcrumbs::for('klasifikasi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Klasifikasi', route('klasifikasi'));
});
