<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\MyJournalComment::class, function (Faker $faker) {
    
    $fileRealPath = UploadedFile::fake()->create('tempfilename.pdf', 10)->store('public/upload');
    
    return [
        'user_id'        => $faker->numberBetween(1, 10),
        'my_journal_id'  => $faker->numberBetween(1, 10),
        'commentable_id' => $faker->numberBetween(1, 10),
        'comment'        => $faker->realText(50),
        'image_comment'  => $fileRealPath,
    ];
});
