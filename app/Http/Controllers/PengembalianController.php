<?php

namespace App\Http\Controllers;

use App\Models\BukuInduk;
use App\Models\DataPinjam;
use Illuminate\Support\Str;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        return view('components.pengembalian.pengembalian-page', [
            'title' => "Data Pengembalian",
            'pengembalian' => Pengembalian::filter()->orderBy('pengembalian.created_at')->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_peminjaman' => 'required',
            'tanggal_dikembalikan' => 'required',
            'id_pelanggaran' => 'nullable',
            'denda' => 'nullable',
            'keterangan' => 'nullable|string|max:150',
            'created_by' => 'required'
        ]);
        $validated['excerpt'] = Str::limit($request->body, 200);

        $buku = BukuInduk::select('stok_tersedia')->where('kode_buku_induk', $request->kode_buku_induk)->first();
        // if ($buku->tipe_harga == 'Eksemplar') {
        //     $jumlah = $buku->jml_eks + 1;
        //     $eks = ['jml_eks' => $jumlah];
        //     BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($eks);
        // } else {
        //     $jumlah = $buku->jml_jld + 1;
        //     $jld = ['jml_jld' => $jumlah];
        //     BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($jld);
        // }

        $jumlah = $buku->stok_tersedia + 1;
        $stok = ['stok_tersedia' => $jumlah];
        BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($stok);
        $status = ['status' => 0];

        Pengembalian::create($validated);
        DataPinjam::where('id_peminjaman', $request->id_peminjaman)->update($status);
        // dd($request);
        return redirect()->route('peminjaman')->with('success', 'Pengembalian telah di proses');
    }
}
