<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ["position_name"=>'A'],
            ["position_name"=>'B'],
            ["position_name"=>'C'],
            ["position_name"=>'D'],
            ["position_name"=>'E'],
            ["position_name"=>'F']
        ];
      
        foreach($positions as $position) {
            $u = new Position;
            $u->position_name = $position["position_name"];
            $u->save();
        }
    }
}
