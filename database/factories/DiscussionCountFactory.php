<?php

use Faker\Generator as Faker;

$factory->define(App\DiscussionCount::class, function (Faker $faker) {
    return [
        'user_id'       => $faker->numberBetween(1, 10),
        'discussion_id' => $faker->numberBetween(1, 10)
    ];
});
