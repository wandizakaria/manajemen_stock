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
            $table->decimal('jumlah_gram', 15, 2);
            $table->timestamps();

            // Correcting the foreign key reference
            $table->foreign('produksi_id')->references('id')->on('produksi')->onDelete('cascade');
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
