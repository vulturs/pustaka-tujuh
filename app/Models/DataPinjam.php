<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPinjam extends Model
{
    use HasFactory;
    protected $table = 'data_pinjam';
    protected $primaryKey = 'id_peminjaman';

    protected $fillable = [
        'id_anggota',
        'kode_buku_induk',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'created_by',
    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('anggota', 'data_pinjam.id_anggota', '=', 'anggota.id_anggota')
            ->join('users', 'data_pinjam.created_by', '=', 'users.id_user')
            ->join('buku_induk', 'data_pinjam.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->select('*')
            ->where('anggota.nama_anggota', 'like', '%' . request('search') . '%')
            ->orWhere('buku_induk.judul_buku', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }

    public function scopeWithJoins($query): void
    {
        $query->join('anggota', 'data_pinjam.id_anggota', '=', 'anggota.id_anggota')
            ->join('users', 'data_pinjam.created_by', '=', 'users.id_user')
            ->join('buku_induk', 'data_pinjam.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->select(
                'data_pinjam.*',
                'anggota.nama_anggota',
                'users.nama as nama_user',
                'buku_induk.judul_buku',
                'buku_induk.pengarang',
                'penerbit.nama_penerbit',
                'klasifikasi.kode_ddc'
            );
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
