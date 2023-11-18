<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CompanyTypesTableSeeder extends Seeder
{
    static array $companyTypes = [
        'Физлицо',
        'Юрлицо'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$companyTypes as $companyType) {
            DB::table('company_types')->insert([
                'type_name' => $companyType,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
