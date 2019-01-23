<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Club::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'           => $faker->numberBetween(1, 10),
        'school_name'       => $faker->realText(10),
        'school_calling_id' => $faker->numberBetween(1, 3),
        'club_name'         => $faker->realText(10),
        'club_calling_id'   => $faker->numberBetween(1, 3),
        'image'             => $fileRealPath
    ];
});
