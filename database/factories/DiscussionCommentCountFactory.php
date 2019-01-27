<?php

use Faker\Generator as Faker;

$factory->define(App\DiscussionCommentCount::class, function (Faker $faker) {
    return [
        'user_id'               => $faker->numberBetween(1, 10),
        'discussion_comment_id' => $faker->numberBetween(1, 10)
    ];
});
