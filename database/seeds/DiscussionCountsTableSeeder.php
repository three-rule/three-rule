<?php

use Illuminate\Database\Seeder;

class DiscussionCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DiscussionCount::class, 10)->create();
    }
}
