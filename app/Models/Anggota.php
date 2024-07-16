<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        $query->where('nama_anggota','like','%'.request('search').'%');
    }
}
 