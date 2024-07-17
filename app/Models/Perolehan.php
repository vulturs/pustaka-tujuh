<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perolehan extends Model
{
    use HasFactory;
    protected $table = 'perolehan';
    protected $primaryKey = 'id_perolehan';

    protected $fillable = [
        'nama_sumber',
        'no_telp',
        'provinsi',
        'kota_kab',
        'created_by',
    ];

    // public function perolehans(): BelongsTo
    // {

    //     return $this->belongsTo(Perolehan::class);
    // }

    public function scopeFilter(Builder $query): void
    {
        $query->join('users', 'perolehan.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('nama_sumber', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
