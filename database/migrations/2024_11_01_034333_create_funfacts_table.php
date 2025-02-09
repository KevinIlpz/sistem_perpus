<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funfacts', function (Blueprint $table) {
            $table->id();
            $table->string('siswa_teraktif');
            $table->string('rayon_teraktif');
            $table->string('rombel_teraktif');
            $table->string('buku_terfavorit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funfacts');
    }
};
