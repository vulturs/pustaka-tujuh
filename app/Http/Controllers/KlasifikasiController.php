<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.klasifikasi.klasifikasi-page', [
            'title' => "Data Klasifikasi (Kode DDC)",
            // 'anggota' => $anggota
            'klasifikasi' => Klasifikasi::filter()->orderBy('kode_ddc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.klasifikasi.create-klasifikasi-page', [
            'title' => "Data Klasifikasi (Kode DDC)",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_ddc' => 'required',
            'klasifikasi' => 'required|string',
            'keterangan' => 'required|string',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Klasifikasi::create($validated);
        return redirect()->route('klasifikasi')->with('success', 'Data klasifikasi berhasil ditambahkan');
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
        $klasifikasi = Klasifikasi::find($id);

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.klasifikasi.edit-klasifikasi-page', [
            'title' => "Edit Data Klasifikasi",
            'klasifikasi' => $klasifikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $klasifikasi = Klasifikasi::find($id);

        if (is_null($klasifikasi)) {
            return redirect()->route('klasifikasi')->with('error', 'Klasifikasi tidak ditemukan.');
        }

        $valid = $request->validate([
            'kode_ddc' => 'required|numeric',
            'klasifikasi' => 'required|string',
            'keterangan' => 'required|string',
            'created_by' => 'required'
        ]);
        // dd($valid);

        // $anggota->update($valid);
        Klasifikasi::where('id_klasifikasi', $klasifikasi->id_klasifikasi)->update($valid);

        return redirect()->route('klasifikasi')->with('success', 'Data Klasifikasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klasifikasi = Klasifikasi::find($id);

        if (is_null($klasifikasi)) {
            return redirect()->back()->with('error', 'Klasifikasi tidak ditemukan.');
        }

        $klasifikasi->delete();
        return redirect()->route('klasifikasi')->with('success', 'Data klasifikasi berhasil dihapus');
    }
}
