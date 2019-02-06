<?php

use Illuminate\Database\Seeder;

class MypagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mypage::class, 50)->create();
    }
}
