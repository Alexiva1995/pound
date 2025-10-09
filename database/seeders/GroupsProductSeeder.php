<?php

namespace Database\Seeders;

use App\Models\GroupsProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GroupsProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'group 1',
                'slug' => Str::slug('group 1')
            ],
            [
                'name' => 'group 2',
                'slug' => Str::slug('group 2')
            ],
            [
                'name' => 'group 3',
                'slug' => Str::slug('group 3')
            ],
            [
                'name' => 'group 4',
                'slug' => Str::slug('group 4')
            ],
            [
                'name' => 'group 5',
                'slug' => Str::slug('group 5')
            ],

        ];
        foreach ($groups as $group) {
            $group = GroupsProduct::factory(1)->create($group);
        }
    }
}
