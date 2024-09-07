<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
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
        // $anggota = new Anggota();
        return view('components.anggota.anggota-page', [
            'title' => "Data Anggota",
            'anggota' => Anggota::filter()->orderBy('id_anggota')->paginate(10)
            // 'anggota' => $anggota->show()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$anggota = Anggota::all(); // Mendapatkan semua data anggota
        // $title = 'Data Anggota';   // Mendefinisikan title
        //return view('components.anggota.create_anggota_page', compact('anggota', 'title'));
        //dd($anggota);
        return view('components.anggota.create-anggota-page',  ['title' => "Tambah Anggota", 'kelas' => Kelas::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_anggota' => 'required|string|max:100',
            'kelas_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'required|string',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Anggota::create($validated);
        return redirect()->route('anggota')->with('success', 'Data anggota berhasil ditambah');
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

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.anggota.edit-anggota-page', [
            'title' => "Edit Data Anggota",
            'anggota' => $anggota,
            'kelas' => Kelas::all(),
        ]);
        // dd($anggota->nama_anggota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);

        if (is_null($anggota)) {
            return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        }

        $valid = $request->validate([
            'nama_anggota' => 'required|string|max:100',
            'kelas_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'keterangan' => 'nullable|string',
            'created_by' => 'required'
        ]);

        // $anggota->update($valid);
        Anggota::where('id_anggota', $anggota->id_anggota)->update($valid);

        return redirect()->route('anggota')->with('success', 'Data Anggota berhasil diperbarui.');
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
