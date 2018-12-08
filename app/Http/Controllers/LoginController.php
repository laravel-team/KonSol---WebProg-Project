<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;

class LoginController extends Controller
{
    public function index(){
    	return view('auth.login');
    }

    public function login(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	$memberID = DB::table('members')->where('email','=',$email)->where('password','=',$password)->value('memberID');
    	$member = Member::find($memberID);
    	
    	if($member != null)
    	{
            $name = Member::find($memberID)->name;      
    		session(['login'=>$member->name, 'id'=>$member->memberID, 'photo'=>$member->profilePicture, 'success'=>'login']);

            return view('dashboard', compact('name'));
        }
		else
		{
			return redirect()->back();
		}
    }
}
