<?php

use Faker\Generator as Faker;

$factory->define(App\Calendar::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'start'       => $faker->date($format='y-m-d',$max='now'),
        'end'       => $faker->date($format='y-m-d',$max='now'),
        'title'       => $faker->realText(50),
        'tag'         => $faker->realText(50),
        'schedule'    => $faker->realText(50),
        'start_time'  => $faker->realText(50),
        'end_time'    => $faker->realText(50),
        'url'         => $faker->realText(50),
        'description' => $faker->realText(50)
    ];
});
