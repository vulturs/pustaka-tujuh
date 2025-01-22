<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\DataPinjam;
use App\Models\Pelanggaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\ExportFilePinjam;
use Maatwebsite\Excel\Facades\Excel;
use App\View\Components\peminjaman\peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.peminjaman.peminjaman-page', [
            'title' => "Data Peminjaman",
            'peminjaman' => DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->where('status', 1)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = new Anggota();
        $koleksi = new BukuInduk();
        return view('components.peminjaman.create-peminjaman-page',  [
            'title' => "Tambah Data Peminjaman",
            // 'anggota' => $anggota->choose(),
            'anggotaAll' => $anggota->allAnggota(),
            'koleksiAll' => $koleksi->allKoleksi(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request['tanggal_peminjaman']);
        $validated = $request->validate([
            'id_anggota' => 'required',
            'kode_buku_induk' => 'required',
            'tanggal_peminjaman' => 'required',
            'batas_pengembalian' => 'required',
            'created_by'  => 'required',
        ]);

        $validated['status'] = 1;
        $validated['excerpt'] = Str::limit($request->body, 200);

        $buku = BukuInduk::select('stok_tersedia')->where('kode_buku_induk', $request->kode_buku_induk)->first();

        $jumlah = $buku->stok_tersedia - 1;
        $stok = ['stok_tersedia' => $jumlah];
        BukuInduk::where('kode_buku_induk', $request->kode_buku_induk)->update($stok);

        DataPinjam::create($validated);
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function proses_kembali($id)
    {
        $title = 'Pengembalian Buku';
        $pinjam = DataPinjam::withJoins()->where('data_pinjam.id_peminjaman', $id)->firstOrFail();
        $pelanggaran = Pelanggaran::all();

        return view('components.peminjaman.proses-kembali-page', compact('pinjam', 'title', 'pelanggaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Data Peminjaman';
        $pinjam = DataPinjam::withJoins()->where('data_pinjam.id_peminjaman', $id)->firstOrFail();
        $agt = new Anggota();
        $bukuInduk = new BukuInduk();
        $koleksiAll = $bukuInduk->allKoleksi();
        $anggotaAll = $agt->allAnggota();

        return view('components.peminjaman.edit-peminjaman', compact(
            'pinjam',
            'title',
            'koleksiAll',
            'anggotaAll'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pinjam = DataPinjam::find($id);

        if (is_null($pinjam)) {
            return redirect()->route('peminjaman')->with('error', 'Buku Induk tidak ditemukan.');
        }

        // dd($request);
        $validated = $request->validate([
            'id_anggota' => 'required',
            'kode_buku_induk' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'created_by'  => 'required',
        ]);

        // $anggota->update($valid);
        DataPinjam::where('id_peminjaman', $pinjam->id_peminjaman)->update($validated);

        return redirect()->route('peminjaman')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peminjaman = DataPinjam::find($id);

        if (is_null($peminjaman)) {
            return redirect()->back()->with('error', 'Data Peminjaman tidak ditemukan.');
        }

        $peminjaman->delete();
        return redirect()->route('peminjaman')->with('success', 'Data Peminjaman berhasil dihapus');
    }

    public function print(Request $request)
    {
        $title = 'Data Peminjaman.pdf';
        $peminjaman = DataPinjam::filter()->orderBy('data_pinjam.created_at', 'desc')->get();
        // dd($data);
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('components.peminjaman.print-peminjaman', compact('peminjaman', 'title'))
                ->setPaper('a4', 'portrait');
            return $pdf->stream('Data Peminjaman.pdf');
        }
    }

    public function excel()
    {
        return Excel::download(new ExportFilePinjam, 'Data Peminjaman ' . now()->format('d-m-Y') . '.xlsx');
    }
}
