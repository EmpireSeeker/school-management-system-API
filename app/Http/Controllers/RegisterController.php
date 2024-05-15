<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user=$user;
    }


    public function register(Request $request){
        $request->password=bcrypt($request->password);

        $registerdetails=[
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'DOB'=>$request->DOB,
            'address'=>$request->address,
            'password'=>$request->password,
        ];

        $registrationsuccessful=$this->user->create($registerdetails);
        if(!$registrationsuccessful){
            return[
                'status'=>'fail',
                'status_code'=>400,
                'message'=>'not successful',
            ];
        }

        return[
            'status'=>'sucessful',
            'status_code'=>200,
            'message'=>'regisetered',
            'data'=>$registrationsuccessful,
        ];

        }



public function logout(Request $request){
auth()->user()->token()->revoke();
return response()->json([
    'message'=>'user logged out successfully'],200);
if(!$request->validate($request->user)){
    return[
        'status'=>'failed  to logout',
        'status_code'=>200,
        'message'=>'failed to logout',
    ];

    return[
        'status'=>'success',
        'status_code'=>200,
        'message'=>'sueccessfully out',
    ];
}
    
}

}
