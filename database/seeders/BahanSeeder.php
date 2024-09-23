<?php

namespace Database\Seeders;

use App\Models\Bahan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bahan::create([
            'stok_bahan_id' => 1,
            'jenis_bahan_id' => 1,
            'supplier_id' => 1,
            'kode_bahan' => 'BHN001',
            'nama_bahan' => 'Gula Pasir',
            'tgl_masuk' => '2024-09-19' ,
            'harga_total' => 150000.00,
            'harga_per_kg' => 15000.00,
            'harga_per_g' => 15.00,
            'keterangan' => 'Gula pasir untuk produksi',
        ]);


    }
}
