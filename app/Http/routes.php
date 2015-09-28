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
Route::post('iviews/create', 'IviewController@store');


Route::get('reporting', 'ReportingController@index');
Route::get('reporting/create', 'ReportingController@create');


//API
Route::get('api/languages', function($iviewId)
{
	return App\Language::all();
});
Route::get('api/iviews', function($iviewId)
{
	return App\Iview::all();
});

Route::get('api/iview/{id}', function($iviewId)
{
	return App\iview::findOrFail($iviewId);
});

Route::get('api/iview/{id}/urls', function($iviewId)
{
	$iview = App\iview::find($iviewId);
	$urls = [];
	foreach ($iview->urls as $url) {
		$urls[] = ['value'=>$url->id,'text'=>$url->subdomain.".".$url->domain];
	}
	return $urls;
});

Route::get('api/legacytables', function()
{
	$tables = [];
	Config::set('database.fetch', PDO::FETCH_ASSOC);
	$allTables = DB::connection('mysqliview')->select('SHOW TABLES');
	foreach($allTables as $table){
		foreach ($table as $key => $name) {
			$tables[] = $name;
		}
	}
	return $tables;
});

Route::post('api/fieldnames', function()
{
	$columns = [];
	Config::set('database.fetch', PDO::FETCH_ASSOC);
	$allcolumns = DB::connection(Request::input('connection'))->select('DESCRIBE '.Request::input('table_name'));
	foreach($allcolumns as $column){
		$columns[]=$column['Field'];
	}
	return $columns;
});
