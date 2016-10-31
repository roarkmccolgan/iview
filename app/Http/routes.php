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



/*Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

	//Products
	//Route::get('/', 'ProductController@index');
	//Route::get('/tool', 'ToolController@run');
Route::auth();
//Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function(){
	
	Route::get('ga', 'AnalyticsController@index');

	//IVIEWS
	Route::get('iviews/', 'IviewController@index');
	Route::get('iviews/create', 'IviewController@create');
	Route::post('iviews/create', 'IviewController@store');

	//TOOLS
	Route::get('tools/', 'ToolController@index');
	Route::get('tools/create', 'ToolController@create');
	Route::post('tools/create', 'ToolController@store');

	//REPORTING
	Route::get('reporting', 'ReportingController@index');
	Route::get('reporting/create', 'ReportingController@create');
});

Route::group(['domain' => '{tool}.idcgauge.net'], function ($tool) {
	/*Route::bind('tool', function ($value) {
        return App\Tool::findOrFail($value);
    });*/
    Route::get('/', 'ToolController@run')->middleware(['routebyurl','reloadquestions']);

    Route::get('/pdf', 'PdfController@wkhtml');
    Route::get('/template/default/report/header', function(){
    	return View::make('tool.default.report.header');
    });

    Route::group(['prefix' => 'quiz'], function(){

		Route::get('/{section}/page{num}', 'ToolController@getPage');
		Route::post('/{section}/page{num}', 'ToolController@savePage');

		Route::get('/complete', 'ToolController@getComplete');
		Route::post('/complete', 'ToolController@postComplete');
		Route::get('/download/{userid}', 'ToolController@getDownload');
		Route::get('/download', 'ToolController@fakeDownload');
	});

	Route::group(['prefix' => 'admin','middleware'=>['auth','routebyurl']], function(){
		Route::get('/', 'TerminalController@dashboard');
		Route::get('/assessments', 'TerminalController@showAssessments');
	});
});


Route::group(['prefix' => 'api'], function(){
	//API
	Route::get('languages', function ($iviewId) {
	    return App\Language::all();
	});
	Route::get('iviews', function ($iviewId) {
	    return App\Iview::all();
	});

	Route::get('iview/{id}', function ($iviewId) {
	    return App\iview::findOrFail($iviewId);
	});

	Route::get('iview/{id}/urls', function ($iviewId) {
	    $iview = App\iview::find($iviewId);
	    $urls = [];
	    foreach ($iview->urls as $url) {
	        $urls[] = ['value'=>$url->id,'text'=>$url->subdomain.".".$url->domain];
	    }
	    return $urls;
	});
	Route::get('results/{section}', 'ToolController@getCalcResults');

	Route::get('legacytables', function () {
	    $tables = [];
	    Config::set('database.fetch', PDO::FETCH_ASSOC);
	    $allTables = DB::connection('mysqliview')->select('SHOW TABLES');
	    foreach ($allTables as $table) {
	        foreach ($table as $key => $name) {
	            $tables[] = $name;
	        }
	    }
	    return $tables;
	});

	Route::post('fieldnames', function () {
	    $columns = [];
	    Config::set('database.fetch', PDO::FETCH_ASSOC);
	    $allcolumns = DB::connection(Request::input('connection'))->select('DESCRIBE '.Request::input('table_name'));
	    foreach ($allcolumns as $column) {
	        $columns[]=$column['Field'];
	    }
	    return $columns;
	});
});
