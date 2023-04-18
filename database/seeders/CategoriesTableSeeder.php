<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'News',
            ],
            [
                'name' => 'Technology',
            ],
            [
                'name' => 'Sports',
            ],
        ];

        // Loop through the categories and create them in the database
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
            ]);
        }
    }
}
