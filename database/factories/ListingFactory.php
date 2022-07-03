<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(),
            'tags'        => 'laravel, api, backend',
            'company'     => $this->faker->company(),
            'email'       => $this->faker->companyEmail(),
            'website'     => $this->faker->url(),
            'location'    => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
