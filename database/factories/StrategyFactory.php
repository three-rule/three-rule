<?php

use Faker\Generator as Faker;

$factory->define(App\Strategy::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'policy'      => $faker->realText(10),
        'rule'        => $faker->realText(10)
    ];
});
