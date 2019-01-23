<?php

use Illuminate\Database\Seeder;

class StrategiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Strategy::class, 10)->create();
    }
}
