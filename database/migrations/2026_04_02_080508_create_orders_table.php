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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal', 17);
            $table->string('kode_order', 40);
            $table->string('no_antrian', 35);
            $table->string('id_customer');
            $table->string('id_jenis_desain');
            $table->string('lebar', 11);
            $table->string('tinggi', 11);
            $table->string('qty');
            $table->string('harga', 11);
            $table->string('total_harga', 11);
            $table->string('pengambilan', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
