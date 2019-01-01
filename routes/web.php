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

Route::get('/kontext-login', 'LoginController@showKontext')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::get('/konface-login', 'LoginController@showKonface')->middleware(\App\Http\Middleware\LoginMiddleware::class);

Route::get('/about-us', 'HomeController@indexAboutUs')->name('aboutus');

Route::get('/dashboard', 'LoginController@showDashboard')->middleware(\App\Http\Middleware\LoginMiddleware::class);

Route::get('/change-profile', 'LoginController@changeProfile')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::patch('/update-profile/{id}', 'LoginController@updateProfile');
Route::get('/about-us-login', 'LoginController@showAboutUs')->middleware(\App\Http\Middleware\LoginMiddleware::class);

Route::get('/logout', 'LoginController@logOut');