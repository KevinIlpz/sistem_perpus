<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamans'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'siswa_id',
        'buku_id',
        'tanggal_pinjam',
        'estimasi_kembali',
        'tanggal_kembali',
        'status',
    ];

    protected $casts = [
        'tanggal_pinjam' => 'date', // Cast ke tipe date
        'estimasi_kembali' => 'date', // Cast ke tipe date
        'tanggal_kembali' => 'date', // Cast ke tipe date
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
