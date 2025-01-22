<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BukuInduk extends Model
{
    use HasFactory;
    protected $table = 'buku_induk';
    protected $primaryKey = 'kode_buku_induk';

    protected $fillable = [
        'judul_buku',
        'pengarang',
        'kode_ddc',
        'tahun',
        'kota_terbit',
        'bahasa',
        'id_penerbit',
        'isbn',
        'jum_hlm',
        'dimensi',
        'edisi',
        'satuan',
        'jumlah_total',
        'stok_tersedia',
        'harga',
        'tipe_harga',
        'id_perolehan',
        'ketersediaan',
        'cover',
        'created_by'
    ];

    protected static function booted()
    {
        static::created(function ($bukuInduk) {

            // Buat callNumber
            $kodeDdc = $bukuInduk->kode_ddc;
            $pengarang = strtoupper(substr($bukuInduk->pengarang, 0, 3)); // 3 huruf awal pengarang
            $judulBuku = strtoupper(substr($bukuInduk->judul_buku, 0, 1)); // Huruf awal judul buku
            $callNumber = "{$kodeDdc} {$pengarang} {$judulBuku}";

            Katalog::create([
                'kode_buku_induk' => $bukuInduk->kode_buku_induk,
                'callNumber' => $callNumber,
                'created_by' => auth()->user()->id_user,
            ]);
        });
    }

    public function scopeFilter(Builder $query): void
    {
        $query->join('klasifikasi', 'buku_induk.kode_ddc', '=', 'klasifikasi.kode_ddc')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('perolehan', 'buku_induk.id_perolehan', '=', 'perolehan.id_perolehan')
            ->join('users', 'buku_induk.created_by', '=', 'users.id_user')
            ->select(
                'buku_induk.*',
                'klasifikasi.kode_ddc',
                'penerbit.nama_penerbit',
                'perolehan.nama_sumber',
                'users.nama',
            )
            ->where('judul_buku', 'like', '%' . request('search') . '%')
            ->orWhere('pengarang', 'like', '%' . request('search') . '%')
            ->orWhere('klasifikasi.kode_ddc', 'like', '%' . request('search') . '%')
            ->orWhere('penerbit.nama_penerbit', 'like', '%' . request('search') . '%')
            ->orWhere('perolehan.nama_sumber', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }

    public function choose()
    {
        return $this->join('klasifikasi', 'buku_induk.kode_ddc', '=', 'klasifikasi.kode_ddc')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('perolehan', 'buku_induk.id_perolehan', '=', 'perolehan.id_perolehan')
            ->join('users', 'buku_induk.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('judul_buku', 'like', '%' . request('search') . '%')
            ->get()->first();
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
    public function allKoleksi()
    {
        return $this->join('klasifikasi', 'buku_induk.kode_ddc', '=', 'klasifikasi.kode_ddc')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('perolehan', 'buku_induk.id_perolehan', '=', 'perolehan.id_perolehan')
            ->join('users', 'buku_induk.created_by', '=', 'users.id_user')
            ->select('*')
            // ->where('nama_anggota', 'like', '%' . request('search') . '%')
            ->get();
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
