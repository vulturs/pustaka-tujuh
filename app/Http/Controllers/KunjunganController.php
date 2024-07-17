<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $anggota = new Anggota();
        return view('components.kunjungan.kunjungan-page', [
            'title' => "Data Kunjungan",
            'kunjungan' => Kunjungan::filter()->orderBy('id_kunjungan')->paginate(10)
            // 'anggota' => $anggota->show()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.kunjungan.create-kunjungan-page',  [
            'title' => "Tambah Data Kunjungan", 
            'anggota' => Anggota::filter()->orderBy('id_kunjungan')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_anggota' => 'required',
            'tujuan_kunjungan' => 'required|date',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Kunjungan::create($validated);
        return redirect()->route('kunjungan')->with('success', 'Data kunjungan berhasil ditambahkan');
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
        $kunjungan = Kunjungan::find($id);

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.kunjungan.edit-kunjungan-page', [
            'title' => "Edit Data Kunjungan",
            'kunjungan' => $kunjungan,
            'anggota' => Anggota::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kunjungan = Kunjungan::find($id);

        if (is_null($kunjungan)) {
            return redirect()->route('kunjungan')->with('error', 'Data Kunjungan tidak ditemukan.');
        }

        $valid = $request->validate([
            'id_anggota' => 'required',
            'tujuan_kunjungan' => 'required|date',
            'created_by' => 'required',
        ]);

        // $anggota->update($valid);
        Kunjungan::where('id_kunjungan', $kunjungan->id_kunjungan)->update($valid);

        return redirect()->route('kunjungan')->with('success', 'Data Kunjungan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
