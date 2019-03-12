<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Mypage::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'         => $faker->numberBetween(1, 10),
        'icon'            => $fileRealPath,
        'oneword'         => $faker->realText(10),
        'rule_one'       => $faker->realText(30),
        'rule_two'        => $faker->realText(30),
        'rule_three'      => $faker->realText(30)
    ];
});