<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Course::create([
            'mentor_id' => 1,
            'kategori' => 'Backend Developer',
            'title' => 'membuat website jual beli gedang',
            'slug' => 'membuat-website-jual-beli-gedang',
            'deskripsi' => 'lorem isum',
            'images' => 'yanns.jpeg',
            'link' => 'https::vebriannn.my.id'
        ]);
    }
}