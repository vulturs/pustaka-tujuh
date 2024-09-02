<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\DataPinjam;
use App\Models\Pelanggaran;
use App\View\Components\peminjaman\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.peminjaman.peminjaman-page', [
            'title' => "Data Peminjaman",
            'peminjaman' => DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->where('status', 1)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = new Anggota();
        $koleksi = new BukuInduk();
        return view('components.peminjaman.create-peminjaman-page',  [
            'title' => "Tambah Data Peminjaman",
            // 'anggota' => $anggota->choose(),
            'anggotaAll' => $anggota->allAnggota(),
            'koleksiAll' => $koleksi->allKoleksi(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request['tanggal_peminjaman']);
        $validated = $request->validate([
            'id_anggota' => 'required',
            'kode_buku_induk' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'created_by'  => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        $buku = BukuInduk::select('stok_tersedia')->where('kode_buku_induk', $request->kode_buku_induk)->first();
        // if ($buku->jml_eks != 0) {
        //     $jumlah = $buku->jml_eks - 1;
        //     $eks = ['jml_eks' => $jumlah];
        //     BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($eks);
        // } else {
        //     $jumlah = $buku->jml_jld - 1;
        //     $jld = ['jml_jld' => $jumlah];
        //     BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($jld);
        // }
        $jumlah = $buku->stok_tersedia - 1;
        $stok = ['stok_tersedia' => $jumlah];
        BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($stok);

        DataPinjam::create($validated);
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function proses_kembali($id)
    {
        $title = 'Pengembalian Buku';
        $pinjam = DataPinjam::withJoins()->where('data_pinjam.id_peminjaman', $id)->firstOrFail();
        $pelanggaran = Pelanggaran::all();

        return view('components.peminjaman.proses-kembali-page', compact('pinjam', 'title', 'pelanggaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
