<?php

namespace Database\Seeders;

use App\Models\StokBahan;
use Carbon\Carbon;
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
            'jumlah_masuk' => '300',
            'jumlah_gram' => '1000',
            'jumlah_keluar' => '150',
            'tgl_keluar' => Carbon::createFromFormat('Y-m-d', '2024-05-12')->format('Y-m-d'), 
            'keterangan' => 'dibuat roti yg berisi coklat',
        ]);
    }
}
