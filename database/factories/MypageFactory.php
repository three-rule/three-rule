<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Mypage::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'      => $faker->numberBetween(1, 10),
        'icon'         => $fileRealPath,
        'oneword'      => $faker->realText(10),
        'goal_long'    => $faker->realText(30),
        'commit_long'  => $faker->date($format='Y-m-d',$min='now'),
        'goal_mid'     => $faker->realText(30),
        'commit_mid'   => $faker->date($format='Y-m-d',$min='now'),
        'goal_short'   => $faker->realText(30),
        'commit_short' => $faker->date($format='Y-m-d',$min='now'),
    ];
});