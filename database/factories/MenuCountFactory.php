<?php

use Faker\Generator as Faker;

$factory->define(App\MenuCount::class, function (Faker $faker) {
    return [
        'user_id'       => $faker->numberBetween(1, 10),
        'menu_id' => $faker->numberBetween(1, 10)
    ];
});
