<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'INN' => rand(1, 99999),
            'name' => fake()->company,
            'address' => fake()->address,
            'company_type_id' => 1,
            'company_country_id' => 1
        ];
    }
}
