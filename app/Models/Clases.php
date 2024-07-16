<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clases extends Model
{
    use HasFactory;

    protected $primaryKey = 'kelas_id';

    protected $fillable = [
        'kelas',
    ];

    public function anggot(): HasMany
    {
        return $this->hasMany(Anggota::class, 'kelas_id');
    }
}
