<?php

use Faker\Generator as Faker;

$factory->define(App\MyJournalCommentCount::class, function (Faker $faker) {
    return [
        'user_id'            => $faker->numberBetween(1, 10),
        'my_journal_comment_id' => $faker->numberBetween(1, 10)
    ];
});
