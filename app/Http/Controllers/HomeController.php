<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\Kunjungan;
use App\Models\DataPinjam;
use App\Models\Katalog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function index()
    {

        $kun = Kunjungan::count();

        $pinjamCount = DataPinjam::count();

        // dd($seriesPinjam);

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

        $allDatesPinjam = DataPinjam::select(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y') as date"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d-%M-%Y')"))
            ->pluck('date');

        // Ambil data kunjungan berdasarkan jurusan dan tanggal
        $data_peminjaman = DataPinjam::select(
            DB::raw("COUNT(*) as count"),
            DB::raw("DATE_FORMAT(data_pinjam.created_at, '%d-%M-%Y') as date"),
            'data_kelas.jurusan'
        )
            ->join('anggota', 'data_pinjam.id_anggota', '=', 'anggota.id_anggota')
            ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->groupBy('data_kelas.jurusan', DB::raw("DATE_FORMAT(data_pinjam.created_at, '%d-%M-%Y')"))
            ->get();

        // Inisialisasi array untuk series dan kategori
        $seriesDataPinjam = [];
        foreach ($allDatesPinjam as $date) {
            foreach ($data_peminjaman as $data) {
                if (!isset($seriesDataPinjam[$data->jurusan])) {
                    $seriesDataPinjam[$data->jurusan] = array_fill(0, count($allDatesPinjam), 0);
                }
                if ($data->date == $date) {
                    $index = array_search($date, $allDatesPinjam->toArray());
                    $seriesDataPinjam[$data->jurusan][$index] = $data->count;
                }
            }
        }

        // Konversi array dates ke format yang bisa digunakan di JavaScript
        $categoriesPinjam = $allDatesPinjam->toArray();

        $currentYear = date('Y');
        $dataPinjamDdc = $this->getDataPeminjaman($currentYear);

        // dd($dataPinjamTop);

        // Ambil tahun dari request atau gunakan tahun sekarang sebagai default
        // Ambil tahun dari request atau gunakan tahun sekarang sebagai default
        $currentYear = request()->input('year', date('Y'));

        // Ambil data buku yang paling sering dipinjam berdasarkan tahun yang dipilih
        $topBooks = $this->getTop5Books($currentYear);

        // Ambil data untuk grafik DDC berdasarkan tahun yang dipilih
        $dataPinjamTop = $this->getDataPeminjaman($currentYear);

        // Ambil daftar tahun yang tersedia di data peminjaman
        $availableYears = DataPinjam::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->pluck('year');

        $users = User::count();
        $anggota = Anggota::count();
        $koleksi = BukuInduk::sum('stok_tersedia');
        $katalog = Katalog::count();
        // $kunjungan = Kunjungan::all();
        $title = "Dashboard";
        $pinjam = DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->limit(6)->get();
        $kunjung = Kunjungan::filter()->orderBy('kunjungan.created_at', 'desc')->limit(6)->get();

        return view('home', compact(
            'users',
            'anggota',
            'koleksi',
            'kun',
            'title',
            'pinjam',
            'kunjung',
            'katalog',
            'pinjamCount',
            'seriesDataPinjam',
            'categoriesPinjam',
            'seriesData',
            'categories',
            'topBooks',
            'dataPinjamDdc',
            'dataPinjamTop',
            'availableYears',
            'currentYear'
        ));
    }

    private function getDataPeminjaman($year)
    {
        $data_peminjaman = DataPinjam::select(
            DB::raw("COUNT(*) as count"),
            'klasifikasi.kode_ddc',
            'data_kelas.jurusan'
        )
            ->join('buku_induk', 'data_pinjam.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->join('anggota', 'data_pinjam.id_anggota', '=', 'anggota.id_anggota')
            ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->whereYear('data_pinjam.created_at', $year)
            ->groupBy('klasifikasi.kode_ddc', 'data_kelas.jurusan')
            ->get();

        // Olah data menjadi format yang sesuai untuk ApexCharts
        $data = [];
        $jurusan = [];
        $ddcSeries = [];

        foreach ($data_peminjaman as $item) {
            if (!isset($jurusan[$item->jurusan])) {
                $jurusan[$item->jurusan] = count($jurusan) + 1; // Assign unique index to each jurusan
            }
            $ddcSeries[$item->kode_ddc][] = $item->count;
        }

        $chartData = [
            'xaxis' => array_keys($jurusan),
            'series' => []
        ];

        foreach ($ddcSeries as $kode_ddc => $data) {
            $chartData['series'][] = [
                'name' => $kode_ddc,
                'data' => $data
            ];
        }

        return $chartData;
    }

    private function getTop5Books($year)
    {
        $topBooks = DataPinjam::select(
            'buku_induk.judul_buku',
            DB::raw('COUNT(data_pinjam.kode_buku_induk) as total_peminjaman')
        )
            ->join('buku_induk', 'data_pinjam.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->whereYear('data_pinjam.created_at', $year)
            ->groupBy('buku_induk.judul_buku')
            ->orderBy('total_peminjaman', 'desc')
            ->limit(5)
            ->get();

        return $topBooks;
    }
}
