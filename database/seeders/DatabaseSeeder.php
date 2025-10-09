<?php

namespace Database\Seeders;

use App\Models\ExchangeRate;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RolesSeeder::class,
            ShippingAddressesSeeder::class,
            CategorySeeder::class,
            CompanySeeder::class,
            GroupsProductSeeder::class,
            OriginSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            ExchangeRateSeeder::class,
            AuctionSeeder::class,
        ]);
    }
}
