<?php

use Illuminate\Database\Seeder;

class MyjournalCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MyJournalCount::class, 10)->create();
    }
}
