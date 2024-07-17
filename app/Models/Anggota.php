<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'nama_anggota',
        'kelas_id',
        'tanggal_masuk',
        'keterangan',
    ];

    public function clases(): BelongsTo
    {

        return $this->belongsTo(Kelas::class);
    }

    public function scopeFilter(Builder $query): void
    {
        $query->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
            ->join('users', 'anggota.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('nama_anggota', 'like', '%' . request('search') . '%')
            ->orWhere('data_kelas.kelas', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }

    // public function show()
    // {
    //     return $this
    //         ->join('data_kelas', 'anggota.kelas_id', '=', 'data_kelas.kelas_id')
    //         ->join('users', 'anggota.created_by', '=', 'users.id_user')
    //         ->select('*')
    //         ->where('nama_anggota', 'like', '%' . request('search') . '%')
    //         ->get();
    // }
}
