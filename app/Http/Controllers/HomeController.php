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

        $kun = Kunjungan::count();

        // $total_kunjungan = Kunjungan::select(DB::raw("COUNT(*) as count"))
        //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
        //     ->pluck('count');

        $bulan_pinjam = DataPinjam::select(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as created_at"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('created_at');

        $total_kunjungan = Kunjungan::select(DB::raw("COUNT(*) as count"), 'data_kelas.jurusan')
            ->join('anggota', 'kunjungan.id_anggota', '=', 'anggota.id_anggota')
            ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->groupBy('data_kelas.jurusan', DB::raw("DATE_FORMAT(kunjungan.created_at, '%d-%M-%Y')"))
            ->pluck('count', 'data_kelas.jurusan');

        $bulan = Kunjungan::select(DB::raw("DATE_FORMAT(kunjungan.created_at, '%d-%M-%Y') as created_at"))
            ->groupBy(DB::raw("DATE_FORMAT(kunjungan.created_at, '%d-%M-%Y')"))
            ->pluck('created_at');


        $data_peminjaman = DataPinjam::select(DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('count');

        $pinjamCount = DataPinjam::count();

        // dd($total_kunjungan);

        // $bulan = Kunjungan::select(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as created_at"))
        //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
        //     ->pluck('created_at');


        // dd($bulan);

        // Ambil semua tanggal unik yang ada di data kunjungan
        $allDates = Kunjungan::select(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as date"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('date');

        // Ambil data kunjungan berdasarkan jurusan dan tanggal
        $kunjunganData = Kunjungan::select(
            DB::raw("COUNT(*) as count"),
            DB::raw("DATE_FORMAT(kunjungan.created_at, '%d-%M-%Y') as date"),
            'data_kelas.jurusan'
        )
            ->join('anggota', 'kunjungan.id_anggota', '=', 'anggota.id_anggota')
            ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->groupBy('data_kelas.jurusan', DB::raw("DATE_FORMAT(kunjungan.created_at, '%d-%M-%Y')"))
            ->get();

        // Inisialisasi array untuk series dan kategori
        $seriesData = [];
        foreach ($allDates as $date) {
            foreach ($kunjunganData as $data) {
                if (!isset($seriesData[$data->jurusan])) {
                    $seriesData[$data->jurusan] = array_fill(0, count($allDates), 0);
                }
                if ($data->date == $date) {
                    $index = array_search($date, $allDates->toArray());
                    $seriesData[$data->jurusan][$index] = $data->count;
                }
            }
        }

        // Konversi array dates ke format yang bisa digunakan di JavaScript
        $categories = $allDates->toArray();

        // dd($categories);

        $users = User::count();
        $anggota = Anggota::count();
        $koleksi = BukuInduk::count();
        $katalog = Katalog::count();
        // $kunjungan = Kunjungan::all();
        $title = "Dashboard";
        $pinjam = DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->limit(6)->get();
        $kunjung = Kunjungan::filter()->orderBy('kunjungan.created_at', 'desc')->limit(4)->get();

        return view('home', compact(
            'users',
            'anggota',
            'koleksi',
            'total_kunjungan',
            'kun',
            'bulan',
            'title',
            'pinjam',
            'kunjung',
            'katalog',
            'pinjamCount',
            'data_peminjaman',
            'bulan_pinjam',
            'seriesData',
            'categories',
        ));
    }
}
