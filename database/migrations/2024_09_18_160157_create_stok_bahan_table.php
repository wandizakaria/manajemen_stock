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
        Schema::create('stok_bahan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produksi_id');
            $table->unsignedBigInteger('jenis_bahan_id');
            $table->decimal('jumlah_gram', 15, 2);
            $table->decimal('jumlah_keluar', 15, 2);
            $table->date('tgl_keluar');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('produksi_id')->references('id')->on('produksi')->onDelete('cascade');
            $table->foreign('jenis_bahan_id')->references('id')->on('jenis_bahan')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_bahan');
    }
};
