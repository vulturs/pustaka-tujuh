<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerbit extends Model
{
    use HasFactory;
    protected $table = 'penerbit';
    protected $primaryKey = 'id_penerbit';

    protected $fillable = [
        'nama_penerbit',
        'alamat',
        'created_by'
    ];

    public function scopeFilter(Builder $query): void
    {
        $query->join('users', 'penerbit.created_by', '=', 'users.id_user')
            ->select('*')
            ->where('penerbit.nama_penerbit', 'like', '%' . request('search') . '%')
            ->orWhere('penerbit.alamat', 'like', '%' . request('search') . '%')
            ->orWhere('users.nama', 'like', '%' . request('search') . '%');
        // $query->where('nama_anggota', 'like', '%' . request('search') . '%');
    }
}
