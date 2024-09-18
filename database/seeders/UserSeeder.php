<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Irwan Karim',
            'username' => 'pemilik',
            'level' => 'pemiik',
            'password' => bcrypt('pemilik123'),
        ]);

        User::create([
            'name' => 'Wandi Zakaria',
            'username' => 'operator',
            'level' => 'operator',
            'password' => bcrypt('operator123'),
        ]);

        User::create([
            'name' => 'Ain noe',
            'username' => 'produksi',
            'level' => 'produksi',
            'password' => bcrypt('produksi123'),
        ]);
    }
}
