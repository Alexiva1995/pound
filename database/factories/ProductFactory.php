<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\GroupsProduct;
use App\Models\Origin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->sentence(2);
        $category = Category::all()->random();
        $origin = Origin::all()->random();
        $cofes = ['Geisha', 'Caturra'];
        $processes = ['Washed', 'Natural'];
        $units = ['Kg', 'gr', 'sacos', 'Tonelada'];
        $gropus = GroupsProduct::all()->random();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'origin_id' => $origin,
            'category_id' => $category->id,
            'sale_price' => fake()->randomFloat(2, 0, 1000),
            'description' => fake()->text(),
            'coffee_varitey' => $cofes[array_rand($cofes)],
            'proccess' => $processes[array_rand($processes)],
            'quantity' => fake()->numberBetween(0, 100),
            'quantity_units' => $units[array_rand($units)],
            'barcode' => fake()->ean13(),
            'group_id' => $gropus,
        ];
    }
}
