<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran';
    protected $primaryKey = 'id_pelanggaran';

    protected $fillable = [
        'jenis_pelanggaran',
        'keterangan',
        'created_by',
    ];

    // public function perlanggaran(): BelongsTo
    // {

    //     return $this->belongsTo(Pelanggaran::class);
    // }

    public function scopeFilter(Builder $query): void
    {
        $query->join('users', 'pelanggaran.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('jenis_pelanggaran', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
