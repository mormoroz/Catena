<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CompanyCountriesTableSeeder extends Seeder
{

    static array $companyCountries = [
        'Россия',
        'Казахстан',
        'Китай',
        'Таджикистан'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$companyCountries as $companyCountry) {
            DB::table('company_countries')->insert([
                'country_name' => $companyCountry,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
