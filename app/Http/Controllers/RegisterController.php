<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Input;
use Hash;

class RegisterController extends Controller
{
    public function index(){
    	return view('auth.register');
    }

    public function store(Request $request){
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
		
		$member = new Member(Input::all());

		$birthday = Input::get('years')."-".Input::get('months')."-".Input::get('days');
		
		$member->dob = date('Y-m-d H:i:s', strtotime($birthday));

		if ($request->hasFile('image')) {
    		$image = $request->file('image');
        	$imageName = time().'.'.$image->getClientOriginalName();
        	$dest = 'assets/images/';
        	$image->move($dest, $imageName);
        	$member->profilePicture = $imageName;
		}else{
            $member->profilePicture = "";
        }

		$member->email = $request->email;
        $member->name = $request->name;
        $member->password = bcrypt($request->password);
        $member->gender = $request->gender;
        $member->address = $request->address;
        $member->contactNumber = $request->contactNumber;
        $member->konWallet = 0;

        $member->save();

    	return redirect('/login');
    }
}
