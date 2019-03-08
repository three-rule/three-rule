<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'title'  => $faker->realText(10),
        'url' => $faker->realText(10)
    ];
});
