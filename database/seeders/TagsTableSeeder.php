<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create some example tags
      $tags = [
        [
            'name' => 'PHP'
        ],
        [
            'name' => 'Laravel'
        ],
        [
            'name' => 'JavaScript'
        ],
        [
            'name' => 'React'
        ],
    ];

    // Loop through the tags and create them in the database
    foreach ($tags as $tag) {
        Tag::create([
            'name' => $tag['name'],
        ]);
    }
    }
}
