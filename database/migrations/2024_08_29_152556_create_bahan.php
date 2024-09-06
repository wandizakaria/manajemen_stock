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
        // Schema::create('levels', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('level');
        //     $table->timestamps();
        // });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('full_name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->foreignId('level_id')->constrained();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        Schema::create('produksi', function (Blueprint $table) {
            $table->id('id_produksi');
            $table->string('jenis_produksi');
            $table->integer('jumlah_produksi');
            $table->date('tgl_produksi');
            $table->timestamps();
        });

        Schema::create('stok_bahan', function (Blueprint $table) {
            $table->id('id_stok_bahan');
            $table->unsignedBigInteger('id_produksi');
            $table->decimal('jumlah_gram', 15, 2);
            $table->timestamps();

            $table->foreign('id_produksi')->references('id_produksi')->on('produksi');
        });

        Schema::create('bahan', function (Blueprint $table) {
            $table->id('id_bahan');
            $table->string('kode_bahan');
            $table->string('nama_bahan');
            $table->unsignedBigInteger('id_stok_bahan');
            $table->unsignedBigInteger('id_jenis_bahan');
            // $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_supplier');
            $table->decimal('harga_total', 15, 2);
            $table->decimal('harga_per_kg', 15, 2);
            $table->decimal('harga_per_g', 15, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_stok_bahan')->references('id_stok_bahan')->on('stok_bahan');
            $table->foreign('id_jenis_bahan')->references('id_jenis_bahan')->on('jenis_bahan');
            // $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
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
