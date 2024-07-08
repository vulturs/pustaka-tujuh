<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'anggota' => Anggota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.anggota.create_anggota_page', [
            'title' => "Data Anggota",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'kelas' => 'required',
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
    public function destroy(Anggota $anggota)
    {
        Anggota::delete();
        return redirect()->route('anggota')->with('success', 'Data anggota berhasil ditambahkan');
    }
}
