<?php

namespace Database\Seeders;

use App\Models\ExchangeRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExchangeRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exchanges = [
            [
                'currency_code' => 'USD',
                'rate' => 1.00,
            ],
            [
                'currency_code' => 'Bs',
                'rate' => 171.4831,
            ],
            [
                'currency_code' => 'COP',
                'rate' => 3899.41,
            ],
        ];
        foreach ($exchanges as $exchange) {
            $exchange = ExchangeRate::factory(1)->create($exchange);
        }
    }
}
