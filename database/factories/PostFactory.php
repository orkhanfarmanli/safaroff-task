<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'main_img' => 'image.jpg',
        'short_desc' => $faker->paragraph,
        'body' => $faker->text,
    ];
});
