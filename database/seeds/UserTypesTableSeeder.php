<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usertypes = [
            ["user_type_name"=>'学生'],
            ["user_type_name"=>'教師'],
            ["user_type_name"=>'指導員']
        ];
      
        foreach($usertypes as $usertype) {
            $u = new UserType;
            $u->user_type_name = $usertype["user_type_name"];
            $u->save();
        }
    }
}
