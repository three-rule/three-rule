<?php

use Illuminate\Database\Seeder;

class MyjournalCommentCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MyJournalCommentCount::class, 10)->create();
    }
}
