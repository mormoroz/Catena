<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'application_status_type_id' => rand(1, 3),
            'user_id' => 1,
            'company_id' => 1,
            'customer_id' => rand(1, 5),
            'cargo_id' => rand(1, 10),
            'start_point' => fake()->city,
            'end_point' => fake()->city
        ];
    }
}
