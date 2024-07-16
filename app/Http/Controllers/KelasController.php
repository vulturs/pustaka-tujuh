<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $kelas = Clases::first();

        if(request('search')){
            $kelas->where('kelas','like','%'.request('search').'%');
        }

        return view('components.kelas.kelas-page', [
            'title' => "Data Kelas",
            // 'anggota' => $anggota
            'kelas' => $kelas->paginate(5)
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
        ]);

        $validated['excerpt'] = Str::limit($request->body,200);

        Clases::create($validated);
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
    public function destroy($kelas_id)
    {
        $kelas = Clases::find($kelas_id);

        if (is_null($kelas)) {
            return redirect()->back()->with('error', 'Kelas tidak ditemukan.');
        }

        $kelas->delete();
        return redirect()->route('kelas')->with('success', 'Data kelas berhasil dihapus');
    }
}
