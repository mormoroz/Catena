<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CargoTypesTableSeeder extends Seeder
{
    static $cargoTypes = [
        'Обычный',
        'Хрупкий',
        'Опасный'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$cargoTypes as $cargoType) {
            DB::table('cargo_types')->insert([
                'type_name' => $cargoType,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
