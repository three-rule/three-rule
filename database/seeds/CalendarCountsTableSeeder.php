<?php

use Illuminate\Database\Seeder;

class CalendarCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CalendarCount::class, 10)->create();
    }
}
