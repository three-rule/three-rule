<?php

use Illuminate\Database\Seeder;

class CalendarCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CalendarComment::class, 10)->create();
    }
}
