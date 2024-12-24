<?php

namespace App\Exports;

use App\Models\BukuInduk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportFileKoleksi implements FromView
{
    public function view(): View
    {
        // Mengambil data kunjungan
        $title = 'Data Koleksi.xlsx';
        $data = BukuInduk::filter()->orderBy('buku_induk.created_at', 'desc')->get();
        // Mengembalikan view dengan data kunjungan
        return view('components.koleksi.koleksi-excel', compact('data', 'title'));
    }
}
