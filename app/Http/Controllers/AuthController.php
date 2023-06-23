<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class AuthController extends Controller
{
    public function login (Request $request){
        if(!$request->email && !$request->password){

            return response(["message"=>"email and password is required!"]);  
        }
        $user = User::where('email', $request->email)->first();
        if($user){
            if($user->password == $request->password){
                $access_token = $user->createToken('authToken')->plainTextToken;
                return response(['user'=>$user, 'token'=> $access_token ]);
            }
            }else{
            return response([
                'message'=>'usr not found'
            ]);
        }
    }
}
