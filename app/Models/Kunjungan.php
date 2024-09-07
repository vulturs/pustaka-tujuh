<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    protected $primaryKey = 'id_kunjungan';

    protected $fillable = [
        'id_anggota',
        'tujuan_kunjungan',
        'modified_by'
    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('anggota', 'kunjungan.id_anggota', '=', 'anggota.id_anggota')
            ->join('users', 'kunjungan.modified_by', '=', 'users.id_user')
            ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->select('kunjungan.*', 'kunjungan.created_at as kunjungan_created_at', 'anggota.*', 'users.*', 'data_kelas.*')
            ->where('anggota.nama_anggota', 'like', '%' . request('search') . '%')
            ->orWhere('data_kelas.kelas', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
