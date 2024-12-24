<?php

namespace App\Http\Controllers;

use App\Exports\ExportFileKoleksi;
use App\Models\Penerbit;
use App\Models\BukuInduk;
use App\Models\Perolehan;
use App\Models\Klasifikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class KoleksiController extends Controller
{

    public function index()
    {
        return view('components.koleksi.koleksi-page', [
            'title' => 'Koleksi',
            'koleksi' => BukuInduk::filter()->orderBy('buku_induk.created_at', 'desc')->paginate(5)
        ]);
    }

    public function create()
    {
        $title = "Tambah Buku Induk";
        $klasifikasi = Klasifikasi::all();
        $penerbit = Penerbit::all();
        $perolehan = Perolehan::all();
        return view('components.koleksi.create-koleksi-page', compact(
            'title',
            'klasifikasi',
            'penerbit',
            'perolehan'
        ));
    }

    public function store(Request $request)
    {
        // if ($request->jml_eks != 0) {
        //     $stok = $request->jml_eks;
        // } else {
        //     $stok = $request->jml_eks;
        // }

        // dd($request->all());
        // return $request->file('cover')->store('cover-images');


        $validated = $request->validate([
            'no_barcode' => 'required|string|max:100',
            'pengarang' => 'required|string',
            'judul_buku' => 'required|string',
            'id_klasifikasi' => 'required',
            'tahun' => 'required|digits:4|numeric|min:1900|max:' . (date('Y')),
            'bahasa' => 'required|string',
            'id_penerbit' => 'required',
            'id_perolehan' => 'required',
            'jumlah_total' => 'required|numeric',
            'satuan' => 'required|string',
            'stok_tersedia' => 'required',
            'harga' => 'required|numeric',
            'tipe_harga' => 'required|string',
            'ketersediaan' => 'required|string',
            'cover' => 'nullable|mimes:png,jpg,jpeg|max:4048',
            'created_by' => 'required|numeric',
        ]);


        $photo = $request->file('cover');
        $filename = date('d-m-Y') . "-" . $photo->getClientOriginalName();
        $path = 'cover-images/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        // return $request->all();


        $validated['cover'] = $filename;
        $validated['excerpt'] = Str::limit($request->body, 200);

        BukuInduk::create($validated);

        return redirect()->route('koleksi')->with('success', 'Data buku induk berhasil ditambahkan');
    }

    public function show() {}


    public function edit($id)
    {
        $koleksi = BukuInduk::find($id);

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.koleksi.edit-koleksi-page', [
            'title' => "Edit Data Buku Induk",
            'koleksi' => $koleksi,
            'klasifikasi' => Klasifikasi::all(),
            'penerbit' => Penerbit::all(),
            'perolehan' => Perolehan::all()
        ]);
        // dd($anggota->nama_anggota);
    }

    public function print(Request $request)
    {
        $title = 'Data Koleksi.pdf';
        $data = BukuInduk::filter()->orderBy('buku_induk.created_at', 'desc')->get();
        // dd($data);
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('components.koleksi.print-koleksi', compact('data', 'title'))
                ->setPaper('a3', 'landscape');
            return $pdf->stream('Data Koleksi.pdf');
        }
    }

    public function excel()
    {
        return Excel::download(new ExportFileKoleksi, 'Data Koleksi ' . now()->format('d-m-Y') . '.xlsx');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $koleksi = BukuInduk::find($id);

        if (is_null($koleksi)) {
            return redirect()->route('koleksi')->with('error', 'Buku Induk tidak ditemukan.');
        }

        // dd($request->all());

        $valid = $request->validate([
            'no_barcode' => 'required|string|max:100',
            'pengarang' => 'required|string',
            'judul_buku' => 'required|string',
            'id_klasifikasi' => 'required',
            'tahun' => 'required|digits:4|numeric|min:1900|max:' . (date('Y')),
            'bahasa' => 'required|string',
            'id_penerbit' => 'required',
            'id_perolehan' => 'required',
            'jumlah_total' => 'required|numeric',
            'satuan' => 'required|string',
            'stok_tersedia' => 'required|numeric',
            'harga' => 'required|numeric',
            'tipe_harga' => 'required|string',
            'ketersediaan' => 'required|string',
            'cover' => 'nullable|mimes:png,jpg,jpeg|max:4048',
            'created_by' => 'required|numeric',
        ]);


        // dd($valid);
        if ($request->hasFile('cover')) {
            $photo = $request->file('cover');
            $filename = date('d-m-Y') . "-" . $photo->getClientOriginalName();
            $path = 'cover-images/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($photo));

            $valid['cover'] = $filename;
        }


        // dd($valid);
        $koleksi->update($valid);

        return redirect()->route('koleksi')->with('success', 'Data buku induk berhasil diperbarui.');
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
