<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ApplicationStatusTypeSeeder extends Seeder
{

    static $applicationStatusTypes = [
        'В работе',
        'Выполнено',
        'Задерживается'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$applicationStatusTypes as $applicationStatusType) {
            DB::table('application_status_types')->insert([
                'application_status_name' => $applicationStatusType,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
