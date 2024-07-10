<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'avatar' => 'yans.jpg',
            'name' => 'Jasim',
            'role' => 'mentor',
            'divisi' => 'Backend Developer',
            'email' => 'jasim@gmail.com',
            'password' => Hash::make('vebrian')
        ]);
    }
}