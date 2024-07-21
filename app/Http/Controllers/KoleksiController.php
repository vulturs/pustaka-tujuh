<?php

namespace App\Http\Controllers;

use App\Models\BukuInduk;
use App\Models\Klasifikasi;
use App\Models\Penerbit;
use App\Models\Perolehan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function show()
    {
        return view('components.koleksi.koleksi-page', [
            'title' => 'Koleksi',
            'koleksi' => BukuInduk::filter()->orderBy('id_koleksi')->paginate(10)
        ]);
    }

    public function create()
    {
        //$anggota = Anggota::all(); // Mendapatkan semua data anggota
        // $title = 'Data Anggota';   // Mendefinisikan title
        //return view('components.anggota.create_anggota_page', compact('anggota', 'title'));
        //dd($anggota);
        return view('components.koleksi.create-koleksi-page',  [
            'title' => "Tambah Anggota", 
            'klasifikasi' => Klasifikasi::all(),
            'penerbit' => Penerbit::all(),
            'perolehan' => Perolehan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_barcode' => 'required|string|max:100',
            'pengarang' => 'required|string',
            'judul_buku' => 'required|string',
            'id_klasifikasi' => 'required',
            'tahun' => 'required',
            'bahasa' => 'required|string',
            'id_penerbit' => 'required',
            'id_perolehan' => 'required',
            'jml_eks' => 'required|string',
            'jml_jld' => 'required|string',
            'harga' => 'required',
            'tipe_harga' => 'required|string',
            'ketersediaan' => 'required|string',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        BukuInduk::create($validated);
        // return redirect()->route('koleksi')->with('success', 'Data buku induk berhasil ditambahkan');
        dd($validated);
    }
}
