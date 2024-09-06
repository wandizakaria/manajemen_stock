<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wandi Zakaria',
            'role_id' => '1',
            'username' => 'Wandi',
            'password' => bcrypt('pemilik123')
        ]);
        
        User::create([
            'name' => 'Aning',
            'role_id' => '2',
            'username' => 'Aning',
            'password' => bcrypt('pemilik123')
        ]);
        
    }
}
