<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use JWTAuth;


class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $user = new User;
        // $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> save();
        // return $user;
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request -> only('email', 'password');
        
        try{
            if(!$token = auth('api') -> attempt($credentials)) {
                return response() -> json(['error' => 'Unauthorized'], 401);
            }
        } catch(JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        
        $user = User::where('email', $request -> email)->first();
        return response() -> json(compact('user', 'token'));
        // return $this->respondWithToken($token);
    }
    
    public function getCurrentUser() 
    {
        $user = JWTAuth::parseToken()->authenticate();
        return response()->json(compact('user'));
    }
    
    public function logout()
    {
        
    }
    
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
