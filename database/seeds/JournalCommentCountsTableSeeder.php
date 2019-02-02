<?php

use Illuminate\Database\Seeder;

class JournalCommentCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\JournalCommentCount::class, 50)->create();
    }
}
