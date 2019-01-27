<?php

use Faker\Generator as Faker;

$factory->define(App\Calendar::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'date'        => $faker->date($format='Y-m-d',$max='now'),
        'activity_id' => $faker->numberBetween(1, 10),
        'schedule'    => $faker->realText(50),
        'check'       => $faker->numberBetween(0,1)
    ];
});
