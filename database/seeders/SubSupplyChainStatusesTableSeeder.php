<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubSupplyChainStatusesTableSeeder extends Seeder
{

    static $subSupplyChainStatuses = [
        'В работе',
        'Выполнено',
        'Задерживается'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$subSupplyChainStatuses as $subSupplyChainStatus) {
            DB::table('sub_supply_chain_statuses')->insert([
                'sub_supply_chain_status_name' => $subSupplyChainStatus,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
