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

Route::get('/', 'PagesController@home');

get('guestbook', function() {
	
	return view('pages.guestbook');
});


// API

get('api/messages', function() {
	return App\Message::all();
});

post('api/messages', function() {
	App\Message::create(Request::all());
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
