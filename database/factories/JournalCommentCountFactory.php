<?php

use Faker\Generator as Faker;

$factory->define(App\JournalCommentCount::class, function (Faker $faker) {
    return [
        'user_id'            => $faker->numberBetween(1, 10),
        'journal_comment_id' => $faker->numberBetween(1, 10)
    ];
});
