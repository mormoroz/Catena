<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'patronymic' => 'test',
            'email' => fake()->email,
            'phone_number' => fake()->phoneNumber,
            'password' => fake()->password,
            'company_country_id' => rand(1, 4),
            'company_type_id' => rand(1, 2)
        ];
    }
}
