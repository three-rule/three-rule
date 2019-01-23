<?php

use Faker\Generator as Faker;

$factory->define(App\JournalCount::class, function (Faker $faker) {
    return [
        'user_id'    => $faker->numberBetween(1, 10),
        'journal_id' => $faker->numberBetween(1, 10)
    ];
});
