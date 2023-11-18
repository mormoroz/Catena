<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Sub_Supply_ChainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supply_chain_id' => rand(1,5),
            'start_point' => fake()->city(),
            'end_point' => fake()->city(),
            'delivery_type_id' => rand(1, 3),
            'contractor_id' => rand(1, 3),
            'sequence_number' => rand(1, 1000),
            'expected_time_end' => fake()->date,
            'real_time_end' => fake()->date,
            'sub_supply_chain_status_id' => rand(1,3)
        ];
    }
}
