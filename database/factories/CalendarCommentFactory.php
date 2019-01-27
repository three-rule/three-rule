<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\CalendarComment::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'        => $faker->numberBetween(1, 10),
        'club_id'        => $faker->numberBetween(1, 10),
        'calendar_id'    => $faker->numberBetween(1, 10),
        'commentable_id' => $faker->numberBetween(1, 10),
        'comment'        => $faker->realText(50),
        'image_comment'  => $fileRealPath,
    ];
});
