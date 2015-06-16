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

//Route::get('/', 'WelcomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('ga', 'AnalyticsController@index');


//IVIEWS
Route::get('iviews/', 'IviewController@index');
Route::get('iviews/create', 'IviewController@create');


//API
Route::get('api/iviews', function($iviewId)
{
	return App\Iview::all();
	/*if(Request::ajax()){
		return App\Iview::find($iviewId);
	}else{
		abort();
	}*/
});
Route::get('api/iview/{id}', function($iviewId)
{
	return App\iview::findOrFail($iviewId);
	/*if(Request::ajax()){
		return App\Iview::find($iviewId);
	}else{
		abort();
	}*/
});
