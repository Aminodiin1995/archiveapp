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
      //  $this->call(CountrySeeder::class);
      //  $this->call(UserSeeder::class);
      //  $this->call(OrderStatusSeeder::class);
      //  $this->call(CategorySeeder::class);
      //  $this->call(BrandSeeder::class);
      //  $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
