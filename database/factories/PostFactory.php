<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'title'       => $faker->sentence,
        'slug'        => $faker->slug,
        'description' => $faker->paragraph,
        'content'     => $faker->realText(),
        'status'      => $faker->numberBetween(0, 1),
        'view_count'  => $faker->numberBetween(10, 1000),
    ];
});
