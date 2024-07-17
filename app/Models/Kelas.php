<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'data_kelas';

    protected $primaryKey = 'kelas_id';

    protected $fillable = [
        'kelas',
    ];

    public function anggot(): HasMany
    {
        return $this->hasMany(Anggota::class, 'kelas_id');
    }

    public function scopeFilter(Builder $query): void
    {
        $query->where('kelas','like','%'.request('search').'%');
    }
}
