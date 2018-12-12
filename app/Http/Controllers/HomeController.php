<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function indexKontext(){
    	return view('kontext');
    }

    public function indexKonface(){
    	return view('konface');
    }

    public function indexAboutUs(){
    	return view('aboutus');
    }
}
