<?php

use Faker\Generator as Faker;

$factory->define(App\ClubMember::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'join_status' => $faker->numberBetween(0, 1),
        'reject'      => $faker->numberBetween(0, 1),
        'role'        => $faker->realText(10),
        'admin'       => $faker->numberBetween(0, 1),
    ];
});
