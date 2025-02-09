<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funfact;

class FunfactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert sample fun facts into the funfacts table
        Funfact::create([
            'siswa_teraktif' => 'Yazid Wiliadi',
            'rayon_teraktif' => 'Cisarua 6',
            'rombel_teraktif' => 'PPLG XII-1',
            'buku_terfavorit' => 'Harry Potter and the Sorcerer\'s Stone',
        ]);

    }
}
