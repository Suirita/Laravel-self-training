<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Technology'],
            ['name' => 'Sport'],
            ['name' => 'Kitchen'],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        $posts = [
            ['title' => 'My first post', 'body' => 'first post content', 'category_id' => 1],
            ['title' => 'My second post', 'body' => 'second post content', 'category_id' => 2],
            ['title' => 'My third post', 'body' => 'third post content', 'category_id' => 3],
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
