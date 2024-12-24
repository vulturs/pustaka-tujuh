<?php

namespace App\Exports;

use App\Models\DataPinjam;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportFilePinjam implements FromView
{
    public function view(): View
    {
        // Mengambil data kunjungan
        $peminjaman = DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->get();
        $title = 'Data Peminjaman.xlsx';
        // Mengembalikan view dengan data kunjungan
        return view('components.peminjaman.peminjaman-excel', compact('peminjaman', 'title'));
    }
}
