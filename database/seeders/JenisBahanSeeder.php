<?php

namespace Database\Seeders;

use App\Models\JenisBahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisBahan::create([
            'jenis' => 'Bahan Kue',
        ]);
    }
}
