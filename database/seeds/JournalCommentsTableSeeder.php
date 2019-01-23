<?php

use Illuminate\Database\Seeder;

class JournalCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\JournalComment::class, 10)->create();
    }
}
