<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Prompts\Key;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('components.kelas.kelas-page', [
            'title' => "Data Kelas",
            // 'anggota' => $anggota
            'kelas' => Kelas::filter()->orderBy('kelas_id')->paginate(10),
            'search' => $request->search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.kelas.create-kelas-page', [
            'title' => "Data Kelas",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kelas' => 'required',
            'jurusan' => 'required',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Kelas::create($validated);
        return redirect()->route('kelas')->with('success', 'Data kelas berhasil ditambahkan');
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
        $kelas = Kelas::find($id);

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.kelas.edit-kelas-page', [
            'title' => "Edit Data Kelas",
            'kelas' => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);

        if (is_null($kelas)) {
            return redirect()->route('kelas')->with('error', 'Kelas tidak ditemukan.');
        }

        $validateData = $request->validate([
            'kelas' => 'required|string|max:100',
            'jurusan' => 'required|string|max:8',
        ]);

        // $anggota->update($validateData);
        Kelas::where('kelas_id', $kelas->kelas_id)->update($validateData);

        return redirect()->route('kelas')->with('success', 'Anggota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);

        if (is_null($kelas)) {
            return redirect()->back()->with('error', 'Kelas tidak ditemukan.');
        }

        $kelas->delete();
        return redirect()->route('kelas')->with('success', 'Data kelas berhasil dihapus');
    }
}
