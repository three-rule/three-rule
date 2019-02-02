<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mypage;

class MypageController extends Controller
{
    public function index() {
        $mypage = User::with('mypage','club','club_member','journal')->get();
        return $mypage;
    }
    public function update(Request $request, $id) {
        
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->save();
        
        $mypage = Mypage::find($id);
        $mypage->oneword      = $request->oneword;
        $mypage->commit_long  = $request->commit_long;
        $mypage->goal_long    = $request->goal_long;
        $mypage->commit_mid   = $request->commit_mid;
        $mypage->goal_mid     = $request->goal_mid;
        $mypage->commit_short = $request->commit_short;
        $mypage->goal_short   = $request->goal_short;
        $mypage->save();
        
        return response()->json($mypage);
    }
    public function upload(Request $request, $id) {
        
        $exploded = explode(',',$request->icon);
        $decoded = base64_decode($exploded[1]);

        if(str_contains($exploded[0],'jpeg'))
            $extension = 'jpeg';
        else
            $extension = 'png';
        
        $fileName = str_random().'.'.$extension;
        $path = public_path().'/'.$fileName;
        file_put_contents($path, $decoded);

        
        $icon = Mypage::find($id);
        $icon->icon = $fileName;
        $icon->save();
        
        return response()->json($icon);
    }
}
