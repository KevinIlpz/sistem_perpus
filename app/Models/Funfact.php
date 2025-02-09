<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_teraktif',
        'rayon_teraktif',
        'rombel_teraktif',
        'buku_terfavorit',
    ];
}
