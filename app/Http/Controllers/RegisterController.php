<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class RegisterController extends Controller
{
    public function index(){
    	return view('auth.register');
    }

    public function store(Request $request){
    	$member = Member::create($request->all());
    	$member->save();
    	return "saved";
    }
}
