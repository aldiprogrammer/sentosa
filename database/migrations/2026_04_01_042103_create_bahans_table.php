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
        Schema::create('bahans', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_masuk', 30);
            $table->string('nama_bahan', 30);
            $table->string('jumlah_bahan', 11);
            $table->string('konversi', 11);
            $table->string('id_satuan_stok', 11);
            $table->string('kode', 30);
            $table->string('mode_cetak', 11)->nullable();
            $table->string('klik', 11);
            $table->string('kelompok', 35)->nullable();
            $table->string('luas', 11)->nullable();
            $table->string('qty', 11)->nullable();
            $table->string('id_kategori_bahan', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahans');
    }
};
