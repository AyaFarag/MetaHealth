<?php

use Faker\Generator as Faker;
use App\Models\Comment as Comment;
use App\Models\Post as Post;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        
        'content' => $faker-> text,
        "post_id" => function () {
            if (Post::count() < 1) {
                return factory(Post::class)->create()->id;
            } else {
                return Post::inRandomOrder()->first()->id;
            }
        },
    ];
});
