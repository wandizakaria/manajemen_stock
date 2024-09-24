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
        Schema::create('bahan', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('stok_bahan_id');
            // $table->unsignedBigInteger('jenis_id'); 
            // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('supplier_id');
            // $table->string('kode_bahan');
            // $table->string('nama_bahan');
            $table->date('tgl_masuk')->nullable();
            $table->decimal('harga_per_kg', 10, 2);
            $table->decimal('harga_per_g', 10, 2);
            $table->string('harga_total');
            // $table->string('harga_total');
            // $table->string('harga_per_kg');
            // $table->string('harga_per_g');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            // $table->foreign('stok_bahan_id')->references('id')->on('stok_bahan')->onDelete('cascade');
            // $table->foreign('jenis_id')->references('id')->on('jenis_bahan')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan');
    }
};
