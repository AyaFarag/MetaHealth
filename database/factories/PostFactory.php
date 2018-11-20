<?php

use Faker\Generator as Faker;
use App\Models\Post as Post;
use App\Models\Category as Category;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'content' => $faker-> text,
        "category_id" => function () {
            if (Category::count() < 1) {
                return factory(Category::class)->create()->id;
            } else {
                return Category::inRandomOrder()->first()->id;
            }
        },
    ];
});
