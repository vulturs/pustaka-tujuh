<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';
    protected $primaryKey = 'id_katalog';

    protected $fillable = [
        'kode_buku_induk',
        'penanggung_jawab',
        'kotaTerbit',
        'tahunTerbit',
        'tahunTerbit',
        'jumlah_hal',
        'dimensi',
        'edisi',
        'callNumber',
        'ISBN',
        'catatan',
        'created_by'
    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('buku_induk', 'katalog.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('users', 'katalog.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('katalog.callNumber', 'like', '%' . request('search') . '%')
            ->orWhere('buku_induk.judul_buku', 'like', '%' . request('search') . '%')
            ->orWhere('buku_induk.pengarang', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }

    public function scopeWithJoins($query): void
    {
        $query->join('buku_induk', 'katalog.kode_buku_induk', '=', 'buku_induk.kode_buku_induk')
            ->join('klasifikasi', 'buku_induk.id_klasifikasi', '=', 'klasifikasi.id_klasifikasi')
            ->join('penerbit', 'buku_induk.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('users', 'katalog.created_by', '=', 'users.id_user')
            ->select(
                'katalog.*',
                'buku_induk.judul_buku',
                'buku_induk.pengarang',
                'penerbit.nama_penerbit',
                'klasifikasi.kode_ddc'
            );
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
