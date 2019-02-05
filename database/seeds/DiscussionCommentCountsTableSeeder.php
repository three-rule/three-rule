<?php

use Illuminate\Database\Seeder;

class DiscussionCommentCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DiscussionCommentCount::class, 50)->create();
    }
}
