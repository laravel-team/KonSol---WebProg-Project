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
    	// Session::put('isLogin', FALSE);

    	if($member != null)
    	{
            session(['login'=>$member->name, 'id'=>$member->memberID, 'photo'=>$member->profilePicture, 'success'=>'login', 'isLogin' => TRUE]);

            return redirect('dashboard');
        }
		else
		{
			return redirect()->back();
		}
    }

    public function showDashboard(){
	    return view('dashboard');
	}

	public function logOut(){
	    \Session::flush();
	    return redirect('login')->with('alert', 'Logout Success');
    }
}
