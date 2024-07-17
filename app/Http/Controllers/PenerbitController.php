<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        return view('components.penerbit.penerbit-page', [
            'title' => "Data Penerbit",
            'penerbit' => Penerbit::all()
        ]);
    }

    public function create()
    {
        return view('components.penerbit.create-penerbit-page',  ['title' => "Tambah Anggota"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Penerbit::create($validated);
        return redirect()->route('penerbit')->with('success', 'Data penerbit berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penerbit = Penerbit::find($id);

        // if (is_null($anggota)) {
        //     return redirect()->route('anggota')->with('error', 'Anggota tidak ditemukan.');
        // }

        return view('components.penerbit.edit-penerbit-page', [
            'title' => "Edit Data Penerbit",
            'penerbit' => $penerbit
        ]);
        // dd($anggota->nama_anggota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penerbit = Penerbit::find($id);

        if (is_null($penerbit)) {
            return redirect()->route('penerbit')->with('error', 'Penerbit tidak ditemukan.');
        }

        $valid = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required',
            'created_by' => 'required'
        ]);

        // $Penerbit->update($valid);
        Penerbit::where('id_penerbit', $id)->update($valid);

        return redirect()->route('penerbit')->with('success', 'Penerbit berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::find($id);

        if (is_null($penerbit)) {
            return redirect()->back()->with('error', 'pener$penerbit tidak ditemukan.');
        }

        $penerbit->delete();
        return redirect()->route('penerbit')->with('success', 'Data anggota berhasil dihapus');
    }
}
