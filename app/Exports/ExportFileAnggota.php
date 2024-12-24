<?php

namespace App\Exports;

use App\Models\Anggota;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportFileAnggota implements FromView
{
    public function view(): View
    {
        // Mengambil data kunjungan
        $anggota = Anggota::filter()->orderBy('anggota.created_at', 'desc')->get();
        $title = 'Data Anggota.xlsx';
        // Mengembalikan view dengan data kunjungan
        return view('components.anggota.anggota-excel', compact('anggota', 'title'));
    }
}
