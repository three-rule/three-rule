<?php

use Faker\Generator as Faker;

$factory->define(App\MenuTag::class, function (Faker $faker) {
    return [
        'club_id'        => $faker->numberBetween(1, 10),
        'tag_one'        => $faker->realText(10),
        'tag_two'        => $faker->realText(10),
        'tag_three'      => $faker->realText(10),
        'tag_four'       => $faker->realText(10),
        'tag_five'       => $faker->realText(10)
    ];
});
