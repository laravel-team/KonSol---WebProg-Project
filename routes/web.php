<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'LoginController@index')->name('indexlogin');
Route::post('/login', 'LoginController@login');
Route::resource('register', 'RegisterController');
Route::get('/kontext', 'HomeController@indexKontext')->name('kontext');
Route::get('/konface', 'HomeController@indexKonface')->name('konface');
Route::get('/aboutus', 'HomeController@indexAboutUs')->name('aboutus');
Route::get('/dashboard', function(){
	return view('dashboard');
});