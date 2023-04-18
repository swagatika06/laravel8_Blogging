<?php

namespace Database\Seeders;
use App\Models\Post;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create some example posts
        $posts = [
            [   
                'user_id' => 1,
                'title' => 'New Product Launch',
                'slug' => 'new-product-launch',
                'image' => 'https://example.com/image.jpg',
                'category_id' => 1,
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus gravida, velit eget mattis ultricies, libero arcu tincidunt sapien, ac sodales sapien risus at nunc. Sed auctor laoreet sapien, non bibendum nunc fringilla non.'
            ],
            [
                'user_id' => 1,
                'title' => 'Technology Trends',
                'slug' => 'technology-trends',
                'image' => 'https://example.com/image2.jpg',
                'category_id' => 2,
                'excerpt' => 'Pellentesque id felis ut libero mollis placerat eu vel augue.',
                'body' => 'Pellentesque id felis ut libero mollis placerat eu vel augue. Nam interdum purus sed neque bibendum, ac sagittis elit varius. Morbi malesuada, eros sit amet aliquet tincidunt, est orci finibus sapien, in convallis nibh nunc ac nisl. Curabitur imperdiet ipsum ac arcu ultricies, ut mollis metus ultricies.'
            ],
            [
                'user_id' => 1,
                'title' => 'Sports News',
                'slug' => 'sports-news',
                'image' => 'https://example.com/image3.jpg',
                'category_id' => 3,
                'excerpt' => 'Suspendisse lobortis, est eget pellentesque placerat, turpis lectus fringilla eros, et feugiat ante dolor nec magna.',
                'body' => 'Suspendisse lobortis, est eget pellentesque placerat, turpis lectus fringilla eros, et feugiat ante dolor nec magna. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce viverra sollicitudin quam. Proin nec nisi ac leo molestie euismod.'
            ],
        ];

        // Loop through the posts and create them in the database
        foreach ($posts as $post) {
            Post::create([
                'user_id' => $post['user_id'],
                'title' => $post['title'],
                'slug' => $post['slug'],
                'image' => $post['image'],
                'category_id' => $post['category_id'],
                'excerpt' => $post['excerpt'],
                'body' => $post['body'],
            ]);
        }
    }
}
