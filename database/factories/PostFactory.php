<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'main_img' => 'image.jpg',
        'short_desc' => $faker->text,
        'body' => $faker->paragraph,
        'user_id' => 1,
    ];
});
