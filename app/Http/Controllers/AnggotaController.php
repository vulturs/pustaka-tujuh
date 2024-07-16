<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use App\Models\Anggota;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.anggota-page', [
            'title' => "Data Anggotas",
            // 'anggota' => $anggota
            'anggota' => Anggota::filter()->orderBy('id')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$anggota = Anggota::all(); // Mendapatkan semua data anggota
        $title = 'Data Anggota';   // Mendefinisikan title
        //return view('components.anggota.create_anggota_page', compact('anggota', 'title'));
        //dd($anggota);
        return view('components.anggota.create_anggota_page',  ['title' => "Tambah Anggota", 'kelas' => Clases::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'kelas_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'required|string',
        ]);

        $validated['excerpt'] = Str::limit($request->body,200);

        Anggota::create($validated);
        return redirect()->route('anggota')->with('success', 'Data anggota berhasil ditambahkan');
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
    public function edit($id)
    {
        $anggota = Anggota::find($id);

        if (is_null($anggota)) {
            return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        }

        return view('components.anggota.edit-anggota-page', [
            'title' => "Data Anggota",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::find($id);

        if (is_null($anggota)) {
            return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        }

        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggota')->with('success', 'Anggota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);

        if (is_null($anggota)) {
            return redirect()->back()->with('error', 'Anggota tidak ditemukan.');
        }

        $anggota->delete();
        return redirect()->route('anggota')->with('success', 'Data anggota berhasil dihapus');
    }
}
