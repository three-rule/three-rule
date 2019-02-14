<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Club::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10);
    
    return [
        'user_id'           => $faker->numberBetween(1, 10),
        'school_name'       => $faker->realText(10),
        'school_calling'    => $faker->realText(10),
        'club_name'         => $faker->realText(10),
        'club_calling'      => $faker->realText(10),
        'image'             => $fileRealPath,
        'policy'            => $faker->realText(10),
        'rule_one'          => $faker->realText(10),
        'rule_two'          => $faker->realText(10),
        'rule_three'        => $faker->realText(10)
    ];
});
