<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cargo_type_id' => rand(1, 3),
            'weight' => fake()->randomFloat(2, 1, 100),
            'width' => fake()->randomFloat(2, 1, 100),
            'height' => fake()->randomFloat(2, 1, 100),
            'length' => fake()->randomFloat(2, 1, 100),
        ];
    }
}
