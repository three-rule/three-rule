<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
    public function index() {
        $clubs = Club::with('club_member','strategy','discussion','menu','calendar','journal')->get();
        return $clubs;
    }
}
