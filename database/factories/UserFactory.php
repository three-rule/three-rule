<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'birthday'       => $faker->date($format='Y-m-d',$max='now'),
        'email'          => $faker->unique()->safeEmail,
        'password'       => Hash::make('testtest'), 
        'provider'       => null,
        'provider_id'    => null,
        'remember_token' => str_random(10),
    ];
});