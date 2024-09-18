<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'kode_supplier' => 'K001',
            'nama_supplier' => 'PT. ABC',
            'alamat' => 'Jln. gelatiku no. 1',
            'no_telepon' => '1234567890'
        ]);
    }
}
