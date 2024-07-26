<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Klasifikasi extends Model
{
   
    use HasFactory;
    protected $table = 'klasifikasi';

    protected $primaryKey = 'id_klasifikasi';

    protected $fillable = [
        'kode_ddc',
        'klasifikasi',
        'keterangan',
        'created_by',
    ];

    public function klasifikasi(): HasMany
    {
        return $this->hasMany(Klasifikasi::class, 'kelas_id');
    }

    public function scopeFilter(Builder $query): void
    {
        $query->join('users', 'klasifikasi.created_by', '=', 'users.id_user')
        ->select('*')
        ->where('kode_ddc','like','%'.request('search').'%');
    }
}
