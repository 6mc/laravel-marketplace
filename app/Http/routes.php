<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

if (!empty(Session::get('eposta'))) {



return view('dashboard');

	# code...
}
else 
{
	return view('home');
}



    
});

Route::get('/signout', function () {

Session::flush();

return view('home');

    
});



Route::get('/home', function () {
   if (!empty(Session::get('eposta'))) {


return view('dashboard');

	# code...
}
else 
{
	return view('home');
}






});


Route::get('/Sell', function () {
   if (!empty(Session::get('eposta'))) {


return view('sell');

	# code...
}
else 
{
	return view('home');
}






});


Route::get('Browse','MarketController@Browse');

Route::get('login','MarketController@login');

Route::post('Sell','MarketController@sell');


Route::get('register','MarketController@register');

Route::post('register','MarketController@signup');

Route::post('login','MarketController@signin'); 


//Route::get('dashboard','MarketController@dash');