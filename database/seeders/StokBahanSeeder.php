<?php

namespace Database\Seeders;

use App\Models\StokBahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StokBahan::create([
            'produksi_id' => 1,
            'jenis_bahan_id' => 1,
            'jumlah_gram' => 1000,
            'jumlah_keluar' => 500,
            'tgl_keluar' => '2024-09-20',
            'keterangan' => 'dibuat roti yg berisi coklat',
        ]);
    }
}
