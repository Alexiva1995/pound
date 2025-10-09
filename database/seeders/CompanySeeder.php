<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = ['Empresa', 'Clinica'];
        foreach ($companies as $company) {
            $company = Company::factory(5)->create([
                'type_company' => $company
            ]);
        }
    }
}
