<?php

namespace Database\Seeders;

use App\Models\Auction;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', 1)->inRandomOrder()->first();
        $products = Product::all();
        $yesterday = Carbon::yesterday()->toDateString();
        $today = Carbon::now()->toDateString();
        foreach ($products as $product) {
            $product = Auction::create([
                'product_id' => $product->id,
                'initial_price' => $product->sale_price,
                'reserve_price' => $product->sale_price,
                'current_price'  => $product->sale_price,
                'start_date' => $yesterday,
                'end_date' => $today,
                'status' => 'scheduled',
                'winner_id' => $user->id,

            ]);
        }
    }
}
