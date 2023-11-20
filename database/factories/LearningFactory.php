<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Learning>
 */
class LearningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'School' => $this->faker->sentence(),
            'course' => $this->faker->sentence(),
            'mode' => $this->faker->sentence(),
            'email' => $this->faker->companyEmail(),
            'fees' => $this->faker->sentence(),
            'number' => $this->faker->phoneNumber(),
            'units' => $this->faker->paragraph(20)
        ];
    }
}
