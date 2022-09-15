<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nickname' => fake()->name,
            'score' => fake()->randomDigit,
            'win' => fake()->randomDigitNot(10),
            'lose' => fake()->randomDigitNot(3),
            'rr' => fake()->randomDigit,
            'teams_id' => 1,
        ];
    }
}
