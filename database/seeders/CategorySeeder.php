<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Category one',
                'slug' => Str::slug('Category one')
            ],
            [
                'name' => 'Category two',
                'slug' => Str::slug('Category two')
            ],
            [
                'name' => 'Category tree',
                'slug' => Str::slug('Category tree')
            ],
            [
                'name' => 'Category four',
                'slug' => Str::slug('Category four')
            ],
        ];
        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category);
        }
    }
}
