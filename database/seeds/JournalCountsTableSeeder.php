<?php

use Illuminate\Database\Seeder;

class JournalCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\JournalCount::class, 10)->create();
    }
}
