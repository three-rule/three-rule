<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Journal::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'       => $faker->numberBetween(1, 10),
        'club_id'       => $faker->numberBetween(1, 10),
        'activity_date' => $faker->date($format='Y-m-d',$max='now'),
        'title'         => $faker->realText(50),
        'appeal'        => $faker->realText(50),
        'improvement'   => $faker->realText(50),
        'nextaction'    => $faker->realText(50),
        'free'          => $faker->realText(50),
        'image'         => $fileRealPath
    ];
});
