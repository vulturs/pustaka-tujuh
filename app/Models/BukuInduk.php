<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuInduk extends Model
{
    use HasFactory;
    protected $table = 'buku_induk';
    protected $primaryKey = 'kode_buku_induk';

    protected $fillable = [
        'no_barcode',
        'pengarang',
        'judul_buku',
        'id_klasifikasi',
        'tahun',
        'bahasa',
        'id_penerbit',
        'id_perolehan',
        'jumlah_total',
        'satuan',
        'stok_tersedia',
        'harga',
        'tipe_harga',
        'ketersediaan',
        'created_by'

    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('perolehan', 'buku_induk.id_perolehan', '=', 'perolehan.id_perolehan')
            ->join('users', 'buku_induk.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('judul_buku', 'like', '%' . request('search') . '%')
            ->orWhere('klasifikasi.kode_ddc', 'like', '%' . request('search') . '%')
            ->orWhere('penerbit.nama_penerbit', 'like', '%' . request('search') . '%')
            ->orWhere('perolehan.nama_sumber', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }

    public function choose()
    {
        return $this->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
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
        return $this->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('perolehan', 'buku_induk.id_perolehan', '=', 'perolehan.id_perolehan')
            ->join('users', 'buku_induk.created_by', '=', 'users.id_user')
            ->select('*')
            // ->where('nama_anggota', 'like', '%' . request('search') . '%')
            ->get();
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
