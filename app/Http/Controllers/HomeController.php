<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\Kunjungan;
use App\Models\DataPinjam;
use App\Models\Katalog;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        if (!isset(auth()->user()->id_user)) {
            return redirect()->route('tambah-kunjungan');
        };

        // $total_kunjungan = Kunjungan::select(DB::raw("COUNT(id_anggota) as id_anggota"))
        //     ->GroupBy(DB::raw("Day(created_at)"))->pluck('id_anggota');
        $total_kunjungan = Kunjungan::select(DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('count');

        $kun = Kunjungan::count();

        // dd($total_kunjungan);

        $bulan = Kunjungan::select(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as created_at"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('created_at');

        // dd($bulan);

        $users = User::count();
        $anggota = Anggota::count();
        $koleksi = BukuInduk::count();
        $katalog = Katalog::count();
        // $kunjungan = Kunjungan::all();
        $title = "Dashboard";
        $pinjam = DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->limit(6)->get();
        $kunjung = Kunjungan::filter()->orderBy('kunjungan.created_at', 'desc')->limit(6)->get();

        return view('home', compact('users', 'anggota', 'koleksi', 'total_kunjungan', 'kun', 'bulan', 'title', 'pinjam', 'kunjung', 'katalog'));
    }
}
