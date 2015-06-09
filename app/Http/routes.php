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

Route::get('/', 'ReportingController@reporting');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('ga', 'AnalyticsController@index');

//AJAX
Route::get('getiview/{id}', function($iviewId)
{
	if(Request::ajax()){
		return App\Iview::find($iviewId);
	}else{
		abort();
	}
});
