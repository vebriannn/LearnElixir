<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategori' => 'fullstack',
            'title' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph,
            'mentor' => $this->faker->name,
            'images' => $this->faker->imageUrl,
            'link' => $this->faker->url,
        ];
    }
}