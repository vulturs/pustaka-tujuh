<?php

namespace App\Http\Controllers;

use App\Models\BukuInduk;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function show()
    {
        return view('components/koleksi-page', [
            'title' => 'Koleksi',
            'koleksi' => BukuInduk::all()
        ]);
    }
}
