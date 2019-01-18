<?php

use Illuminate\Database\Seeder;

class CalendarCommentCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CalendarCommentCount::class, 10)->create();
    }
}
