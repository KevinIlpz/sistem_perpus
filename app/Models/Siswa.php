<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'rayon',
        'rombel',
    ];

    public function peminjamen()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
