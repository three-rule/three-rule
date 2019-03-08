<?php

use Illuminate\Database\Seeder;

class ClubFansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClubFan::class, 10)->create();
    }
}
