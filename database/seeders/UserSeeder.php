<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'David Galileo',
            'last_name' => 'Salgado',
            'phone' => '+503 79124050',
            'email' => 'test@unbcorp.cl',
            'password' => Hash::make('unbc2024'),
        ]);
    }
}
