<?php

namespace Database\Seeders;

use App\Models\Bahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bahan::create([
            'supplier_id' => 1,
            'tgl_masuk' => '2024-09-19',
            'harga_total' => "15.000",
            'harga_per_kg' => 15,
            'harga_per_g' => 15.000,
            'keterangan' => 'Gula pasir untuk produksi',
        ]);
    }
}
