<?php

namespace Database\Seeders;

use App\Models\Supply_chain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyChainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supply_chain::factory()
            ->count(5)
            ->create();
    }
}
