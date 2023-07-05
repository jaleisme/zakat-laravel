<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Fresh System
        $this->call(UsersTableSeeder::class);

        // Mustahik
        $this->call(MustahikCategoryTableSeeder::class);
        $this->call(MustahikTableSeeder::class);

        // Payment
        $this->call(PaymentTypeTableSeeder::class);
        $this->call(MuzakkiTableSeeder::class);
        $this->call(PaymentTableSeeder::class);

        // Distribution
        $this->call(DistributionTableSeeder::class);
    }
}
