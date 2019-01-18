<?php

use Illuminate\Database\Seeder;
use App\SchoolCalling;

class SchoolCallingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoolcallings = [
            ["school_calling_name"=>'小学校'],
            ["school_calling_name"=>'中学校'],
            ["school_calling_name"=>'高校'],
            ["school_calling_name"=>'高専'],
            ["school_calling_name"=>'専門学校'],
            ["school_calling_name"=>'短大'],
            ["school_calling_name"=>'大学'],
        ];
      
        foreach($schoolcallings as $schoolcalling) {
            $u = new SchoolCalling;
            $u->school_calling_name = $schoolcalling["school_calling_name"];
            $u->save();
        }
    }
}
