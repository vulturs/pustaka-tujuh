<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $primaryKey = 'id_pengembalian';

    protected $fillable = [
        'id_peminjaman',
        'tanggal_dikembalikan',
        'id_pelanggaran',
        'denda',
        'keterangan',
        'created_by'
    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('data_pinjam', 'pengembalian.id_peminjaman', '=', 'data_pinjam.id_peminjaman')
            ->join('anggota', 'data_pinjam.id_anggota', '=', 'anggota.id_anggota')
            ->join('buku_induk', 'data_pinjam.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('users', 'pengembalian.created_by', '=', 'users.id_user')
            ->join('pelanggaran', 'pengembalian.id_pelanggaran', '=', 'pelanggaran.id_pelanggaran')
            ->select('*')
            ->where('anggota.nama_anggota', 'like', '%' . request('search') . '%')
            ->orWhere('pengembalian.id_pengembalian', 'like', '%' . request('search') . '%')
            ->orWhere('buku_induk.judul_buku', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
