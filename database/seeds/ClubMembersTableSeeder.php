<?php

use Illuminate\Database\Seeder;

class ClubMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClubMember::class, 10)->create();
    }
}
