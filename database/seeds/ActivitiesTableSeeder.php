<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            ["activity_name"=>'休み'],
            ["activity_name"=>'練習'],
            ["activity_name"=>'試合'],
            ["activity_name"=>'未定']
        ];
      
        foreach($activities as $activity) {
            $u = new Activity;
            $u->activity_name = $activity["activity_name"];
            $u->save();
        }
    }
}
