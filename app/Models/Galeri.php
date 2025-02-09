<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'kategori',
        'keterangan',
        'oleh',
        'tanggal',
    ];

    public function kategori()
    {
        return $this->belongsTo(GaleriKategori::class, 'kategori_id');
    }
}
