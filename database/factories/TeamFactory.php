<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'user_id' => Admin::factory(),
            'personal_team' => true
        ];


    }
}
