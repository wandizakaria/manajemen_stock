<?php

namespace Database\Seeders;

use App\Models\Produksi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produksi::create([
            'jenis_produksi' => 'Roti Isi Coklat',
            'jumlah_produksi' => '1000',
            'tgl_produksi' => '2024-12-05',
            'keterangan' => 'Roti yang berisikan coklat',
        ]);
    }
}
