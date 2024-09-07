<?php

namespace App\Http\Controllers;

use App\Models\Perolehan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PerolehanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.perolehan.perolehan-page', [
            'title' => "Data Perolehan",
            'perolehan' => Perolehan::filter()->orderBy('id_perolehan')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.perolehan.create-perolehan-page',  ['title' => "Tambah Perolehan", 'kelas' => Perolehan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_sumber' => 'required|string|max:100',
            'no_telp' => 'required',
            'provinsi' => 'required|string',
            'kota_kab' => 'required|string',
            'created_by' => 'required',
        ]);

        $validated['excerpt'] = Str::limit($request->body, 200);

        Perolehan::create($validated);
        return redirect()->route('perolehan')->with('success', 'Data sumber perolehan berhasil ditambahkan');
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
        $perolehan = Perolehan::find($id);


        return view('components.perolehan.edit-perolehan-page', [
            'title' => "Edit Data Sumber Perolehan",
            'perolehan' => $perolehan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $perolehan = Perolehan::find($id);

        if (is_null($perolehan)) {
            return redirect()->route('perolehan')->with('error', 'Sumber perolehan tidak ditemukan.');
        }

        $valid = $request->validate([
            'nama_sumber' => 'required|string|max:100',
            'no_telp' => 'required',
            'provinsi' => 'required|string',
            'kota_kab' => 'required|string',
            'created_by' => 'required'
        ]);

        Perolehan::where('id_perolehan', $perolehan->id_perolehan)->update($valid);

        return redirect()->route('perolehan')->with('success', 'Data seumber perolehan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perolehan = Perolehan::find($id);

        if (is_null($perolehan)) {
            return redirect()->back()->with('error', 'Sumber perolehan tidak ditemukan.');
        }

        $perolehan->delete();
        return redirect()->route('perolehan')->with('success', 'Data sumber perolehan berhasil dihapus');
    }
}
