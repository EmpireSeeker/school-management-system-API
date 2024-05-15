<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user=$user;
    }

    public function login(Request $request){
        $field =$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user=$this->user->where('email', $field['email'])->first();

        if(!$user ||!Hash::check($field['password'],$user->password)){
            return[
                'message'=>'invalid login details',
            ];
        }

        return[
            'message'=>'successfully login',
            'status'=>'login successful',
            'status_code'=>200,
        ];


    }
}
