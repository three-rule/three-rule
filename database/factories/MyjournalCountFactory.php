<?php

use Faker\Generator as Faker;

$factory->define(App\MyJournalCount::class, function (Faker $faker) {
    return [
        'user_id'       => $faker->numberBetween(1, 10),
        'my_journal_id' => $faker->numberBetween(1, 10)
    ];
});
