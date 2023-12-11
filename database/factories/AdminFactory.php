<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Support\Str;
use App\Models\Team;
use Laravel\Jetstream\Features;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            'name' => 'Admin 1011',
            // 'email' => $this->faker->unique()->safeEmail(),
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ];

    }
    // $factory->define(Admin::class, function () {
    //     return [
    //         'name' => 'Admin User',
    //         'email' => 'admin@example.com',
    //         'email_verified_at' => now(),
    //         'password' => bcrypt('password'), // You may use bcrypt or Hash::make for password hashing
    //         'remember_token' => Str::random(10),
    //     ];
    // });

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => now(),
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     */
    public function withPersonalTeam(): static
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, Admin $admin) {
                    return ['name' => $admin->name . '\'s Team', 'admin_id' => $admin->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
