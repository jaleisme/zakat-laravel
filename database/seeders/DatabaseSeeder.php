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
        $this->call(UsersTableSeeder::class);
        $this->call(MustahikCategoryTableSeeder::class);
        $this->call(PaymentTypeTableSeeder::class);
        $this->call(MustahikTableSeeder::class);
        $this->call(MuzakkiTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(DistributionTableSeeder::class);
    }
}
