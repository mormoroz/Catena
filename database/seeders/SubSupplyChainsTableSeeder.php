<?php

namespace Database\Seeders;

use App\Models\Sub_supply_chain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSupplyChainsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sub_supply_chain::factory()
            ->count(5)
            ->create();
    }
}
