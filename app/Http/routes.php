<?php

use App\Tracker;

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
Route::auth();
Route::get('/change_password', 'UserController@showChangePassword');
Route::post('/change_password', 'UserController@storeChangePassword');
//Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function(){

	Route::get('ga', 'AnalyticsController@index');

	//IVIEWS
	Route::get('iviews/', 'IviewController@index');
	Route::get('iviews/create', 'IviewController@create');
	Route::post('iviews/create', 'IviewController@store');

	//TOOLS
	Route::get('tools/', 'ToolController@index');
	Route::get('tools/{tool}', 'ToolController@show');
	Route::get('tools/{tool}/questions', 'ToolController@questions');
	Route::post('tools/{tool}/questions', 'ToolController@storequestions');
	Route::get('tools/create', 'ToolController@create');
	Route::post('tools/create', 'ToolController@store');

	//REPORTING
	Route::get('reporting', 'ReportingController@index');
	Route::get('reporting/create', 'ReportingController@create');
});

Route::group(['domain' => '{subdomain}.idcready.net','middleware'=>['locale']], function ($subdomain) {
	Route::group(['prefix' => 'admin','middleware'=>['auth','routebyurl','toolaccess:super,admin,client,local']], function(){
		Route::get('/', 'TerminalController@dashboard');
		Route::post('/', 'TerminalController@dashboard');
		Route::get('/assessments', 'AssessmentController@index');
		Route::get('/assessments/download', 'AssessmentController@downloadAssessments');

		Route::get('/tracking', 'TrackerController@index');
		Route::get('/tracking/new', 'TrackerController@create')->middleware(['toolaccess:super,admin,client']);
		Route::post('/tracking', 'TrackerController@store')->middleware(['toolaccess:super,admin,client']);

		Route::get('/users', 'UserController@index')->middleware(['toolaccess:super,admin,client']);
		Route::get('/users/new', 'UserController@create')->middleware(['toolaccess:super,admin,client']);
		Route::post('/users', 'UserController@store')->middleware(['toolaccess:super,admin,client']);
	});
	Route::group(['prefix' => 'api'], function(){
		Route::group(['prefix' => 'assessments'], function(){
			Route::post('delete/{assessment}', 'AssessmentController@delete');
			Route::post('resend/{assessment}', 'AssessmentController@resend');
		});
		Route::group(['prefix' => 'trackers'], function(){
			Route::post('delete/{tracker}', 'TrackerController@delete');
		});
		Route::group(['prefix' => 'users'], function(){
			Route::post('delete/{user}', 'UserController@delete');
		});
	});

	//default en routes
	Route::get('/', 'ToolController@run')->middleware(['routebyurl','reloadquestions']);

	Route::get('/download/{assid}', 'ToolController@getDownload');

	Route::get('/privacy', function()
	{
		return View::make('legal.privacy');
	});
	Route::get('/cookies', function()
	{
		return View::make('legal.cookies');
	});
	Route::get('/disclaimer', function()
	{
		return View::make('legal.disclaimer');
	});

	Route::get('/pdf', 'PdfController@wkhtml');
	Route::get('/scoring', 'ToolController@scoring');
	Route::get('/resendeloqua', 'ToolController@resendeloqua')->middleware(['routebyurl']);;
	Route::get('/template/{templates}/report/header', function($domain, $template){
		return View::make('tool.'.$template.'.report.header');
	});
	/*Route::get('/template/sublime/report/header', function(){
		return View::make('tool.sublime.report.header');
	});*/
	Route::get('/template/{template}/report/footer', function($domain, $template){
		$product_id = session('product.id');
		$company_alias = session('company.alias');
		$url = session('url');
		return View::make('tool.'.$template.'.report.footer', compact(['url','product_id','company_alias']));
	});
	/*Route::get('/template/sublime/report/footer', function(){
		$product_id = session('product.id');
		$company_alias = session('company.alias');
		$url = session('url');
		return View::make('tool.sublime.report.footer', compact(['url','product_id','company_alias']));
	});*/

	Route::group(['prefix' => 'quiz'], function(){
		Route::get('/{section}/page{num}', 'ToolController@getPage');
		Route::post('/{section}/page{num}', 'ToolController@savePage');

		Route::get('/complete', 'ToolController@getComplete');
		Route::post('/complete', 'ToolController@postComplete');
		Route::get('/download', 'ToolController@fakeDownload');
	});
});


Route::group(['prefix' => 'api'], function(){
	/*Route::bind('assessment', function ($value) {
		return App\Assessment::findOrFail($value);
	});
	Route::bind('tracker', function ($value) {
		return App\Tracker::findOrFail($value);
	});
	Route::bind('user', function ($value) {
	m_returnstatus(conn, identifier) App\User::findOrFail($value);
	});*/
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
