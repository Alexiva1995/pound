<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = User::where('role_id', 4)->inRandomOrder()->first();
        $seller = User::where('role_id', 2)->where('id', '!=', $client->id)->inRandomOrder()->first();
        $tolal = fake()->randomFloat(2, 100, 1000);
        $currency = ['Bs', 'USD', 'COP'];

        return [
            'client_id' => $client,
            'seller_id' => $seller,
            'tolal_amount' => $tolal,
            'currency' => $currency[array_rand($currency)],

        ];
    }
}
