<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Member;
use App\Consultant;
use App\Category;
use App\HeaderCategory;
use App\ConsultationMethod;

class UserController extends Controller
{

	public function indexConsultation(){
		$categories = Category::all();

		return view('consultation', compact('categories'));
	}

	public function sortConsultant($categoryID){
		if($categoryID == "all"){
			$consultants = Consultant::all();
		}else{
			$consultants = HeaderCategory::join('consultants', 'consultants.consultantID', '=', 'header_categories.consultantID')->where('header_categories.categoryID', '=', $categoryID)->get();
		}

		return view('consultantList', compact('consultants'));
	}

	public function indexConsultantProfile($consultantID){
		$consultant = Consultant::find($consultantID);
		$detailConsultant = HeaderCategory::join('consultants', 'consultants.consultantID', '=', 'header_categories.consultantID')->where('consultants.consultantID', '=', $consultantID)->join('categories', 'categories.categoryID', '=', 'header_categories.categoryID')->select('categories.categoryID', 'categories.name as categoryName', 'header_categories.price as price')->get();
		$consultationMethods = ConsultationMethod::all();

		return view('consultantProfile', compact('consultant', 'detailConsultant', 'consultationMethods'));
	}

    public function indexTopup(){
    	return view('topup');
    }

    public function saveTopup(Request $request){
    	$validasi = \Illuminate\Support\Facades\Validator::make($request->all(),[
            'money' => 'required|integer'
        ]);

        if($validasi -> fails()){
            return redirect()->back()->withErrors($validasi)->withInput($request->all());
        }

        $member = Member::find(Session::get('id'));
        $member->konWallet = $member->konWallet + $request->money;

        $member->save();

        Session::put('konWallet', $member->konWallet);

        return redirect()->back();
    }

    public function indexAboutUs(){
        return view('aboutusLogin');
    }
}
