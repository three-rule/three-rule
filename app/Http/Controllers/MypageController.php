<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MypageController extends Controller
{
    public function index() {
        $mypage = User::with('mypage','club','club_member','journal')->get();
        return $mypage;
    }
}
