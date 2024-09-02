<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\BukuInduk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KatalogController extends Controller
{
    public function index()
    {
        // $anggota = new Anggota();
        $title = 'Katalog';
        $katalog = Katalog::filter()->orderBy('id_katalog')->paginate(10);
        return view('components.katalogs.katalog-page', compact('title', 'katalog'));
    }

    public function create()
    {
        $title = 'Tambah Katalog';
        $buku = new BukuInduk();
        $koleksi = $buku->allKoleksi();

        return view('components.katalogs.create-katalog-page',  compact(
            'title',
            'koleksi'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_buku_induk' => 'required',
            'penanggung_jawab' => 'required',
            'kotaTerbit' => 'required',
            'tahunTerbit' => 'required',
            'jumlah_hal' => 'required',
            'dimensi' => 'required',
            'edisi' => 'required',
            'callNumber' => 'required',
            'ISBN' => 'required',
            'catatan' => 'required',
            'created_by' => 'required'
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Katalog::create($validated);
        return redirect()->route('katalog')->with('success', 'Data katalog berhasil ditambahkan');
    }

    public function detail($id)
    {
        $title = 'Detail Katalog';
        $katalog = Katalog::withJoins()->where('katalog.id_katalog', $id)->firstOrFail();

        return view('components.katalogs.detail-katalog', compact('title', 'katalog'));
    }

    public function printPDF($id)
    {
        $katalog =
            Katalog::withJoins()->where('katalog.id_katalog', $id)->firstOrFail();

        $pdf = Pdf::loadView('components.katalogs.print-katalog', compact('katalog'))
            ->setPaper([0, 0, 354.375, 212.625]); // Ukuran 12.5cm x 7.5cm

        return $pdf->stream('katalog.pdf');
    }
}
