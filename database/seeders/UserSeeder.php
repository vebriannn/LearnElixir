<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeders users, ganti role menjadi member, mentor, atau superadmin untuk mengakses website 
        User::create([
            'avatar' => 'veb@gmail.com',
            'name' => 'vebrianns',
            'role' => 'mentor',
            'divisi' => 'UI/UX Designer',
            'email' => 'vebrian@mentor.elixir.com',
            'password' => Hash::make('vebrian')
        ]);
    }
}