<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\Kunjungan;

class HomeController extends Controller
{
    public function index()
    {
        if (!isset(auth()->user()->id_user)) {
            return redirect()->route('tambah-kunjungan');
        };

        $users = User::count();
        $anggota = Anggota::count();
        $koleksi = BukuInduk::count();
        $kunjungan = Kunjungan::all();
        $title = "Dashboard";
        return view('home', compact('users', 'anggota', 'koleksi', 'kunjungan', 'title'));
    }
}
