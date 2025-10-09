<?php

namespace Database\Seeders;

use App\Models\ShippingAddresses;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            // Crear 10 registros por usuario
            for ($i = 0; $i < 10; $i++) {
                ShippingAddresses::create([
                    'user_id' => $user->id,
                    'alias' => fake()->word(),
                    'line1' => fake()->address(),
                    'city' => fake()->city(),
                    'state_province' => fake()->state(),
                    'postal_code' => fake()->postcode(),
                    'country' => fake()->country(),
                ]);
            }
        }
    }
}
