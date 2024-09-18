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
            'jumlah_gram' => 1000
        ]);
    }
}
