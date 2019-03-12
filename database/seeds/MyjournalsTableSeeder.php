<?php

use Illuminate\Database\Seeder;

class MyjournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MyJournal::class, 10)->create();
    }
}
