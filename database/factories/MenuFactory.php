<?php

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    
    return [
        'user_id'     => $faker->numberBetween(1, 10),
        'club_id'     => $faker->numberBetween(1, 10),
        'tag'         => $faker->numberBetween(1, 5),
        'title'       => $faker->realText(20),
        'url'         => $faker->realText(20),
        'description' => $faker->realText(20)
    ];
});
