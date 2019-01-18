<?php

use Illuminate\Database\Seeder;
use App\ClubCalling;

class ClubCallingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubcallings = [
            ["club_calling_name"=>'部活'],
            ["club_calling_name"=>'クラブ'],
            ["club_calling_name"=>'サークル']
        ];
      
        foreach($clubcallings as $clubcalling) {
            $u = new ClubCalling;
            $u->club_calling_name = $clubcalling["club_calling_name"];
            $u->save();
        }
    }
}
