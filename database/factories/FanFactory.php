<?php

use Faker\Generator as Faker;

$factory->define(App\Fan::class, function (Faker $faker) {
    return [
        'user_id'        => $faker->numberBetween(0, 10),
        'follow_user_id' => $faker->numberBetween(0, 10),
        'status'         => $faker->numberBetween(0, 1),
        'reject'         => $faker->numberBetween(0, 1),
    ];
});
