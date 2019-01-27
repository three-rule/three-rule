<?php

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'goal_today'  => $faker->realText(50),
        'date'        => $faker->date($format='Y-m-d',$max='now'),
        'title'       => $faker->realText(50),
        'timezone_id' => $faker->numberBetween(1, 48),
        'position_id' => $faker->numberBetween(1, 6),
    ];
});
