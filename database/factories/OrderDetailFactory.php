<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $products = Product::all()->random();
        $quantity = fake()->randomDigitNotNull();


        return [
            'product_id' => $products->id,
            'quantity' => $quantity,
            'price' => $products->sale_price,
            'unit_cost' => $products->sale_price * 0.9,
        ];
    }
}
