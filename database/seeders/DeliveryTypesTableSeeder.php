<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeliveryTypesTableSeeder extends Seeder
{
    static $deliveryTypes = [
        'Машина',
        'Самолёт',
        'Поезд',
        'Корабль'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$deliveryTypes as $deliveryType) {
            DB::table('delivery_types')->insert([
                'type_name' => $deliveryType,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
