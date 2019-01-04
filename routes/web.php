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


//mainIndex(no need of middleware)
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'LoginController@index')->name('indexlogin');
Route::post('/login', 'LoginController@login');
Route::get('/consultant-login', 'LoginController@consultantindex');
Route::post('/consultant-login', 'LoginController@consultantLogin');

Route::resource('register', 'RegisterController');
Route::get('/kontext', 'HomeController@indexKontext')->name('kontext');
Route::get('/konface', 'HomeController@indexKonface')->name('konface');
Route::get('/about-us', 'HomeController@indexAboutUs')->name('aboutus');
Route::get('/logout', 'LoginController@logOut');
Route::get('/topup','UserController@indexTopup');

//memberIndex(need middleware)
//middlewareny nnti di grouping aja
Route::get('/kontext-login', 'LoginController@showKontext')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::get('/konface-login', 'LoginController@showKonface')->middleware(\App\Http\Middleware\LoginMiddleware::class);

Route::get('/dashboard', 'LoginController@showDashboard')->middleware(\App\Http\Middleware\LoginMiddleware::class);

Route::get('/change-profile', 'LoginController@changeProfile')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::patch('/update-profile/{id}', 'LoginController@updateProfile');
	
//consultation
Route::get('/consultation', 'UserController@indexConsultation')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::get('/consultant/sort/{categoryID}', 'UserController@sortConsultant')->middleware(\App\Http\Middleware\LoginMiddleware::class);

//consultant profile
Route::get('/consultant/{consultantID}', 'UserController@indexConsultantProfile')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::post('/book', 'UserController@saveBookedConsultation')->middleware(\App\Http\Middleware\LoginMiddleware::class);

//schedule
Route::get('/schedule/{id}', 'UserController@indexDetailSchedule')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::post('/saveEditedBook', 'UserController@saveEditedBook')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::get('/deleteFromBooking/{id}', 'UserController@deleteFromBooking')->middleware(\App\Http\Middleware\LoginMiddleware::class);

//top up
// Route::get('/topup', 'UserController@indexTopup')->middleware(\App\Http\Middleware\LoginMiddleware::class);
Route::post('/topup', 'UserController@saveTopup')->middleware(\App\Http\Middleware\LoginMiddleware::class);

//history
Route::get('/history/{id}', 'UserController@indexDetailHistory')->middleware(\App\Http\Middleware\LoginMiddleware::class);

//about us
Route::get('/about-us-login', 'UserController@indexAboutUs')->middleware(\App\Http\Middleware\LoginMiddleware::class);
