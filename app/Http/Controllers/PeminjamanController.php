<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\DataPinjam;
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
            'peminjaman' => DataPinjam::filter()->orderBy('id_peminjaman')->paginate(10)
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
            'id_anggota'=> 'required',
            'kode_buku_induk'=> 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'created_by'  => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        DataPinjam::create($validated);
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
