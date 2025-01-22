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
        $katalog = Katalog::filter()->orderBy('judul_buku')->paginate(9);
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
            'subjek' => 'required',
            'created_by' => 'required'
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Katalog::create($validated);
        return redirect()->route('katalog')->with('success', 'Data katalog berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku = new BukuInduk();
        $koleksi = $buku->allKoleksi();
        $title = 'Edit Katalog';
        $katalog = Katalog::withJoins()->where('katalog.id_katalog', $id)->firstOrFail();

        return view('components.katalogs.edit-katalog', compact('title', 'katalog', 'koleksi'));
    }

    public function update(Request $request, $id)
    {
        $katalog = Katalog::find($id);

        if (is_null($katalog)) {
            return redirect()->route('katalog')->with('error', 'Data katalog tidak ditemukan.');
        }

        // dd($request);
        $valid = $request->validate([
            'kode_buku_induk' => 'required',
            'penanggung_jawab' => 'required',
            'kotaTerbit' => 'required',
            'tahunTerbit' => 'required',
            'jumlah_hal' => 'required',
            'dimensi' => 'required',
            'edisi' => 'required',
            'callNumber' => 'required',
            'ISBN' => 'required',
            'catatan' => 'nullable',
            'created_by' => 'required'
        ]);

        // $anggota->update($valid);
        Katalog::where('id_katalog', $katalog->id_katalog)->update($valid);

        return redirect()->route('katalog')->with('success', 'Data katalog berhasil diperbarui.');
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
            ->setPaper([0, 0, 354.375, 212.625]) // Ukuran 12.5cm x 7.5cm
            ->setOptions([
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'defaultFont' => 'sans-serif',
                'margin-left' => 0,
                'margin-right' => 0,
                'margin-top' => 0,
                'margin-bottom' => 0,
            ]);

        return $pdf->stream('katalog.pdf');
    }

    public function destroy($id)
    {
        $katalog = Katalog::find($id);

        if (is_null($katalog)) {
            return redirect()->back()->with('error', 'Data Buku Induk tidak ditemukan.');
        }

        $katalog->delete();
        return redirect()->route('katalog')->with('success', 'Buku Induk berhasil dihapus');
    }
}
