<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'seller', 'visitor', 'client'];
        foreach ($roles as $rols) {
            $rols = Roles::factory(1)->create(['name' => $rols])->each(function ($rols) {
                User::factory(5)->create([
                    'role_id' => $rols->id,
                ]);
            });
        }
    }
}
