<?php

use Faker\Generator as Faker;
use App\Models\Rate as Rate;
use App\Models\Post as Post;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        
        'star' => 5,
        "post_id" => function () {
            if (Post::count() < 1) {
                return factory(Post::class)->create()->id;
            } else {
                return Post::inRandomOrder()->first()->id;
            }
        },
    ];
});
