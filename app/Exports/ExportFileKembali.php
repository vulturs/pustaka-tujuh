<?php

namespace App\Exports;

use App\Models\Kunjungan;
use App\Models\Pengembalian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportFileKembali implements FromView
{
    public function view(): View
    {
        // Mengambil data kunjungan
        $pengembalian = Pengembalian::filter()->orderBy('pengembalian.created_at', 'desc')->get();
        $title = 'Data Pengembalian.xlsx';
        // Mengembalikan view dengan data kunjungan
        return view('components.pengembalian.pengembalian-excel', compact('pengembalian', 'title'));
    }
}
