<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(10)->create([
            'user_id' => 1,
            'category_id' => rand(1, 3),
        ])->each(function ($post) {
            $post->tags()->sync([
                rand(1, 5),
                rand(1, 5),
                rand(1, 5),
            ]);
        });
    }
}
