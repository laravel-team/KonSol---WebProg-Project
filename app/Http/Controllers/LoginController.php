<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use session;
use Hash;
use App\Member;
use App\Consultant;
use App\ConsultationBooking;
use App\ConsultationHistory;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function index(){
    	return view('auth.login');
    }

    public function consultantIndex(){
        return view('auth.consultantLogin');
    }

    public function login(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	$memberID = DB::table('members')->where('email','=',$email)->first();
    	// Session::put('isLogin', FALSE);

    	if($memberID != null)
    	{

            $member = Member::find($memberID->memberID);

            //check
            $checkPassword = Hash::check($password, $member->password);
            if($checkPassword == false){
                return redirect()->back()->withErrors("Wrong Password !!!");
            }

            session(['email'=>$member->email, 'password'=>$member->password, 'login'=>$member->name, 'id'=>$member->memberID, 'gender'=>$member->gender, 'address'=>$member->address, 'phone'=>$member->contactNumber,  'photo'=>$member->profilePicture, 'konWallet'=>$member->konWallet, 'success'=>'login', 'isLogin' => TRUE]);

            return redirect('dashboard');
        }
		else
		{
			return redirect()->back();
		}
    }

    public function consultantLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $consultantID = DB::table('consultants')->where('email','=',$email)->where('password','=',$password)->value('consultantID');
        $consultant = Consultant::finD($consultantID);

        if($consultant != null)
        {
            session(['email'=>$consultant->email, 'password'=>$consultant->password, 'login'=>$consultant->name, 'id'=>$consultant->consultantID, 'gender'=>$consultant->gender, 'address'=>$consultant->address, 'phone'=>$consultant->contactNumber, 'corporate'=>$consultant->corporate, 'photo'=>$consultant->profilePicture, 'success'=>'login', 'isLogin' => TRUE]);

            return redirect('dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showDashboard(){
        $schedules = ConsultationBooking::join('consultants', 'consultants.consultantID', '=', 'consultation_bookings.consultantID')->join('categories', 'categories.categoryID', '=', 'consultation_bookings.categoryID')->join('consultation_methods', 'consultation_methods.consultationMethodID', '=', 'consultation_bookings.consultationMethodID')->where('memberID', '=', Session::get('id'))->select('consultation_bookings.*', 'consultants.name as consultantName', 'categories.name as categoryName', 'consultation_methods.name as consultationMethod')->orderBy('consultationDate', 'asc')->get();
        $consultants = Consultant::all();
        $bookingCount = ConsultationBooking::where('memberID', '=', Session::get('id'))->count();
        $histories = ConsultationHistory::join('consultants', 'consultants.consultantID', '=', 'consultation_histories.consultantID')->where('memberID', '=', Session::get('id'))->select('consultation_histories.*', 'consultants.name as consultantName')->orderBy('consultationDate', 'asc')->get();
        
	    return view('dashboard', compact('consultants', 'schedules', 'bookingCount', 'histories'));
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
        $member->password = bcrypt($request->password);
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
