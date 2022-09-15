<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teams>
 */
class TeamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_clan' => fake()->lastName,
            'users_id' => fake()->randomDigit(10),
            'win' => fake()->randomDigit,
            'lose' => fake()->randomDigit,
            'players_count' => fake()->randomDigitNot(5),
        ];
    }
}
