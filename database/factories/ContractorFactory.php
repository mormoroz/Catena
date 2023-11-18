<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contractor>
 */
class ContractorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'INN' => rand(1, 1000),
            'name' => fake()->name,
            'address' => fake()->address,
            'company_country_id' => rand(1, 4),
            'company_type_id' => rand(1, 2)
        ];
    }
}
