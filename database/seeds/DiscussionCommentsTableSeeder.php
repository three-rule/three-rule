<?php

use Illuminate\Database\Seeder;

class DiscussionCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DiscussionComment::class, 10)->create();
    }
}
