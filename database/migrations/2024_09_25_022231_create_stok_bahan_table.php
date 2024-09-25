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
            $table->unsignedBigInteger('bahan_id');
            $table->unsignedBigInteger('jenis_id');
            $table->string('jumlah_gram');
            $table->string('jumlah_keluar');
            $table->date('tgl_keluar');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('bahan_id')->references('id')->on('bahan')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenis_bahan')->onDelete('cascade');
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
