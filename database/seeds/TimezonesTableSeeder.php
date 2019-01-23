<?php

use Illuminate\Database\Seeder;
use App\Timezone;

class TimezonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timezones = [
            ["timezone_name"=>'0:00-0:30'],
            ["timezone_name"=>'0:30-1:00'],
            ["timezone_name"=>'1:00-1:30'],
            ["timezone_name"=>'1:30-2:00'],
            ["timezone_name"=>'2:00-2:30'],
            ["timezone_name"=>'2:30-3:00'],
            ["timezone_name"=>'3:00-3:30'],
            ["timezone_name"=>'3:30-4:00'],
            ["timezone_name"=>'4:00-4:30'],
            ["timezone_name"=>'4:30-5:00'],
            ["timezone_name"=>'5:00-5:30'],
            ["timezone_name"=>'5:30-6:00'],
            ["timezone_name"=>'6:00-6:30'],
            ["timezone_name"=>'6:30-7:00'],
            ["timezone_name"=>'7:00-7:30'],
            ["timezone_name"=>'7:30-8:00'],
            ["timezone_name"=>'8:00-8:30'],
            ["timezone_name"=>'8:30-9:00'],
            ["timezone_name"=>'9:00-9:30'],
            ["timezone_name"=>'9:30-10:00'],
            ["timezone_name"=>'10:00-10:30'],
            ["timezone_name"=>'10:30-11:00'],
            ["timezone_name"=>'11:00-11:30'],
            ["timezone_name"=>'11:30-12:00'],
            ["timezone_name"=>'12:00-12:30'],
            ["timezone_name"=>'12:30-13:00'],
            ["timezone_name"=>'13:00-13:30'],
            ["timezone_name"=>'13:30-14:00'],
            ["timezone_name"=>'14:00-14:30'],
            ["timezone_name"=>'14:30-15:00'],
            ["timezone_name"=>'15:00-15:30'],
            ["timezone_name"=>'15:30-16:00'],
            ["timezone_name"=>'16:00-16:30'],
            ["timezone_name"=>'16:30-17:00'],
            ["timezone_name"=>'17:00-17:30'],
            ["timezone_name"=>'17:30-18:00'],
            ["timezone_name"=>'18:00-18:30'],
            ["timezone_name"=>'18:30-19:00'],
            ["timezone_name"=>'19:00-19:30'],
            ["timezone_name"=>'19:30-20:00'],
            ["timezone_name"=>'20:00-20:30'],
            ["timezone_name"=>'20:30-21:00'],
            ["timezone_name"=>'21:00-21:30'],
            ["timezone_name"=>'21:30-22:00'],
            ["timezone_name"=>'22:00-22:30'],
            ["timezone_name"=>'22:30-23:00'],
            ["timezone_name"=>'23:00-23:30'],
            ["timezone_name"=>'23:30-24:00'],
        ];
      
        foreach($timezones as $timezone) {
            $u = new Timezone;
            $u->timezone_term = $timezone["timezone_name"];
            $u->save();
        }
    }
}
