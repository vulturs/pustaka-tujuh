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

    public function index()
    {
        return view('components.koleksi.koleksi-page', [
            'title' => 'Koleksi',
            'koleksi' => BukuInduk::filter()->orderBy('kode_buku_induk')->paginate(10)
        ]);
    }

    public function show()
    {
        
    }

    public function create()
    {
        return view('components.koleksi.create-koleksi-page', [
            'title' => "Tambah Buku Induk", 
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
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'bahasa' => 'required|string',
            'id_penerbit' => 'required',
            'id_perolehan' => 'required',
            'jml_eks' => 'required|integer',
            'jml_jld' => 'required|integer',
            'harga' => 'required|numeric',
            'tipe_harga' => 'required|string',
            'ketersediaan' => 'required|string',
            'created_by' => 'required|integer',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        BukuInduk::create($validated);

        return redirect()->route('koleksi')->with('success', 'Data buku induk berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $koleksi = BukuInduk::find($id);

        if (is_null($koleksi)) {
            return redirect()->back()->with('error', 'Data Buku Induk tidak ditemukan.');
        }

        $koleksi->delete();
        return redirect()->route('koleksi')->with('success', 'Buku Induk berhasil dihapus');
    }
}
