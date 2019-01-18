<?php

use Faker\Generator as Faker;

$factory->define(App\MenuCommentCount::class, function (Faker $faker) {
    return [
        'user_id'               => $faker->numberBetween(1, 10),
        'menu_comment_id' => $faker->numberBetween(1, 10)
    ];
});
