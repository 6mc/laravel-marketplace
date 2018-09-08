<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main');
});

Route::get('Kayit', function ()
{
	return View::make('register');
});

Route::post('Kayit', array('as' => 'Kayit', 'uses' => 'UserController@postCreate'));


Route::get('Giris', function()
{
	return View::make('login');
});

Route::post('Giris', array('as' => 'Giris', 'uses' => 'UserController@postLogin'));


