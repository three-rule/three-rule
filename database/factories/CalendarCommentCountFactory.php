<?php

use Faker\Generator as Faker;

$factory->define(App\CalendarCommentCount::class, function (Faker $faker) {
    return [
        'user_id'               => $faker->numberBetween(1, 10),
        'calendar_comment_id' => $faker->numberBetween(1, 10)
    ];
});
