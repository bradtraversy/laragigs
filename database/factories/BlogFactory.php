<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            'description' => $this->faker->paragraph(200)
        ];
    }
}
