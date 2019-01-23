<?php

use Illuminate\Database\Seeder;

class MenuCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MenuCount::class, 10)->create();
    }
}
