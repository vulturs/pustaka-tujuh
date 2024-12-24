<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\DataPinjam;
use App\Models\Pelanggaran;
use Illuminate\Support\Str;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\ExportFileKembali;
use Maatwebsite\Excel\Facades\Excel;

class PengembalianController extends Controller
{
    public function index()
    {
        return view('components.pengembalian.pengembalian-page', [
            'title' => "Data Pengembalian",
            'pengembalian' => Pengembalian::filter()->orderBy('pengembalian.created_at')->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_peminjaman' => 'required',
            'tanggal_dikembalikan' => 'required',
            'id_pelanggaran' => 'nullable',
            'denda' => 'nullable',
            'keterangan' => 'nullable|string|max:150',
            'created_by' => 'required'
        ]);
        $validated['excerpt'] = Str::limit($request->body, 200);

        $buku = BukuInduk::select('stok_tersedia')->where('kode_buku_induk', $request->kode_buku_induk)->first();

        $jumlah = $buku->stok_tersedia + 1;
        $stok = ['stok_tersedia' => $jumlah];
        BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($stok);
        $status = ['status' => 0];

        Pengembalian::create($validated);
        DataPinjam::where('id_peminjaman', $request->id_peminjaman)->update($status);
        // dd($request);
        return redirect()->route('peminjaman')->with('success', 'Pengembalian telah di proses');
    }


    public function edit(string $id)
    {
        $title = 'Edit Data Pengembalian';
        $kembali = Pengembalian::withJoins()->where('pengembalian.id_pengembalian', $id)->firstOrFail();
        $pelanggaran = Pelanggaran::all();
        // $agt = new Anggota();
        // $bukuInduk = new BukuInduk();
        // $koleksiAll = $bukuInduk->allKoleksi();
        // $anggotaAll = $agt->allAnggota();

        return view('components.pengembalian.edit-pengembalian', compact(
            'kembali',
            'title',
            'pelanggaran'
            // 'koleksiAll',
            // 'anggotaAll'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kembali = Pengembalian::find($id);

        if (is_null($kembali)) {
            return redirect()->route('pengembalian')->with('error', 'Data pengembalian tidak ditemukan.');
        }

        // dd($request);
        $validated = $request->validate([
            'id_peminjaman' => 'required',
            'tanggal_dikembalikan' => 'required',
            'id_pelanggaran' => 'nullable',
            'denda' => 'nullable',
            'keterangan' => 'nullable|string|max:150',
            'created_by' => 'required'
        ]);

        // $anggota->update($valid);
        Pengembalian::where('id_pengembalian', $kembali->id_pengembalian)->update($validated);

        return redirect()->route('pengembalian')->with('success', 'Data pengembalian berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $pengembalian = Pengembalian::find($id);

        if (is_null($pengembalian)) {
            return redirect()->back()->with('error', 'Data pengembalian tidak ditemukan.');
        }

        $pengembalian->delete();
        return redirect()->route('peminjaman')->with('success', 'Data pengembalian berhasil dihapus');
    }

    public function print(Request $request)
    {
        $title = 'Data Anggota.pdf';
        $pengembalian = Pengembalian::filter()->orderBy('pengembalian.created_at', 'desc')->get();
        // dd($data);
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('components.pengembalian.print-pengembalian', compact('pengembalian', 'title'))
                ->setPaper('a4', 'landscape');
            return $pdf->stream('Data Pengembalian.pdf');
        }
    }

    public function excel()
    {
        return Excel::download(new ExportFileKembali, 'Data Pengembalian ' . now()->format('d-m-Y') . '.xlsx');
    }
}
