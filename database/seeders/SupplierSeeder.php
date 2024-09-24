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
            'nama_supplier' => 'PT.SYINSANA SEJAHTRA',
            'alamat' => 'Jln. gelatiku no. 1',
            'no_telepon' => '1234567890',
            'nama_bahan' => 'Mentega blueband',
            'stok' => '50',
        ]);

        Supplier::create([
            'kode_supplier' => 'K002',
            'nama_supplier' => 'CV. MAKMUR JAYA',
            'alamat' => 'Jln. Melati no. 23',
            'no_telepon' => '0987654321',
            'nama_bahan' => 'Gula Pasir',
            'stok' => '100',
        ]);

        Supplier::create([
            'kode_supplier' => 'K003',
            'nama_supplier' => 'UD. SINAR BERLIAN',
            'alamat' => 'Jln. Mawar no. 45',
            'no_telepon' => '08123456789',
            'nama_bahan' => 'Tepung Terigu',
            'stok' => '75',
        ]);

    }
}
