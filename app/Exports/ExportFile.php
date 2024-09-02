<?php

namespace App\Exports;

use App\Models\Kunjungan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportFile implements FromView
{
    public function view(): View
    {
        // Mengambil data kunjungan
        $data = Kunjungan::filter()->orderBy('kunjungan_created_at', 'desc')->get();
        $title = 'Data Kunjungan.xlsx';
        // Mengembalikan view dengan data kunjungan
        return view('components.kunjungan.kunjungan-excel', compact('data', 'title'));
    }
}
