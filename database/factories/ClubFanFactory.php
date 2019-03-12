<?php

use Faker\Generator as Faker;

$factory->define(App\ClubFan::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(0, 10),
        'club_id' => $faker->numberBetween(0, 10),
        'status'  => $faker->numberBetween(0, 1),
        'reject'  => $faker->numberBetween(0, 1),
    ];
});
