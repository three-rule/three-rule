<?php

use Faker\Generator as Faker;

$factory->define(App\CalendarCount::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'calendar_id' => $faker->numberBetween(1, 10)
    ];
});
