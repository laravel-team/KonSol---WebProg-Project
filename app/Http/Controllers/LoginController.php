<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use session;
use App\Member;
use Illuminate\Support\Facades\Input;

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
            session(['email'=>$member->email, 'password'=>$member->password, 'login'=>$member->name, 'id'=>$member->memberID, 'gender'=>$member->gender, 'address'=>$member->address, 'phone'=>$member->contactNumber,  'photo'=>$member->profilePicture, 'success'=>'login', 'isLogin' => TRUE]);

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

    public function showKontext(){
        return view('kontextLogin');
    }

    public function showKonface(){
        return view('konfaceLogin');
    }

    public function changeProfile(){
        $id = Session::get('id');
        return view('auth/change-prof', compact($id));
    }

    public function updateProfile($id , Request $request){
        $member = Member::findOrFail($id);

        $validasi = \Illuminate\Support\Facades\Validator::make($request->all(),[
            'name' => 'required|max:25|min:3',
            'password' => 'required|min:3',
            'gender' => 'required',
            'email' => 'required|email|min:7',
            'address' => 'required|min:4|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'contactNumber' => 'required|numeric'
            // ,
        ]);

        if($validasi -> fails()){
            return redirect()->back()->withErrors($validasi)->withInput($request->all());
        }

        
        // $member = new Member(Input::all());

        $birthday = Input::get('years')."-".Input::get('months')."-".Input::get('days');
        
        $member->dob = date('Y-m-d H:i:s', strtotime($birthday));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $dest = 'assets/images/';
            $image->move($dest, $imageName);
            $member->profilePicture = $imageName;
        }

        $member->email = $request->email;
        $member->name = $request->name;
        $member->password = $request->password;
        $member->gender = $request->gender;
        $member->address = $request->address;
        $member->contactNumber = $request->contactNumber;

        $member->save();

        return redirect('/login');
    }

	public function logOut(){
	    \Session::flush();
	    return redirect('login')->with('alert', 'Logout Success');
    }
}
