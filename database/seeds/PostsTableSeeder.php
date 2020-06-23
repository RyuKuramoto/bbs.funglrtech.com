<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 30)
            ->create()
            ->each(function ($post) {
                $comments = factory(App\Comment::class, 1)->make();
                $post->comments()->saveMany($comments);
            });
    }
}