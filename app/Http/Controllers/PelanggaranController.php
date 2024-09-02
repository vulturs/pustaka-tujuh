<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.pelanggaran.pelanggaran-page', [
            'title' => "Data Jenis Pelanggaran",
            'pelanggaran' => Pelanggaran::filter()->orderBy('id_pelanggaran')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.pelanggaran.create-pelanggaran-page',  ['title' => "Tambah Jenis Pelanggaran", 'pelanggaran' => Pelanggaran::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_pelanggaran' => 'required|string|max:100',
            'keterangan' => 'required|string',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Pelanggaran::create($validated);
        return redirect()->route('pelanggaran')->with('success', 'Data jenis pelanggaran berhasil ditambahkan');
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
        $pelanggaran = Pelanggaran::find($id);


        return view('components.pelanggaran.edit-pelanggaran-page', [
            'title' => "Edit Data Jenis Pelanggaran",
            'pelanggaran' => $pelanggaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggaran = Pelanggaran::find($id);

        if (is_null($pelanggaran)) {
            return redirect()->route('pelanggaran')->with('error', 'Jenis pelanggaran tidak ditemukan.');
        }

        $valid = $request->validate([
            'jenis_pelanggaran' => 'required|string|max:100',
            'keterangan' => 'required|string',
            'created_by' => 'required',
        ]);

        Pelanggaran::where('id_pelanggaran', $pelanggaran->id_pelanggaran)->update($valid);

        return redirect()->route('pelanggaran')->with('success', 'Data jenis pelanggaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggaran = Pelanggaran::find($id);

        if (is_null($pelanggaran)) {
            return redirect()->back()->with('error', 'Sumber perolehan tidak ditemukan.');
        }

        $pelanggaran->delete();
        return redirect()->route('pelanggaran')->with('success', 'Data jenis pelanggaran berhasil dihapus');
    }
}
