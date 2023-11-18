<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ApplicationStatusTypeSeeder::class);
        $this->call(CargoTypesTableSeeder::class);
        $this->call(CompanyCountriesTableSeeder::class);
        $this->call(CompanyTypesTableSeeder::class);
        $this->call(DeliveryTypesTableSeeder::class);
        $this->call(SubSupplyChainStatusesTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(SupplyChainsTableSeeder::class);
        $this->call(ContractorsTableSeeder::class);
        $this->call(SubSupplyChainsTableSeeder::class);
    }
}
