<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateReportRequest;
use App\Iview;
use App\Report;
use Illuminate\Http\Request;

class ReportingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reports = Report::with('notifications')->get();
		//$iviews = Iview::with('reports')->get();
		return view('reporting.index',compact('reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$iviews = Iview::with('company')->get();
		if($iviews->isEmpty()) return redirect('/iviews/create')->with('message', 'No Companies or iViews exist, please create one first');
		return view('reporting.create',compact('iviews'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateReportRequest $request)
	{
		if(!$request->has('company_id')){
			$company = Company::create(['name'=>$request->input('new_company'),'logo'=>'','colours'=>$request->input('colours')]);
			$company_id = $company->id;
		}else{
			$company_id = $request->input('company_id');
		}

		$iview = iView::create([
			'title'=>$request->input('title'),
			'alias'=>str_slug($request->input('title')),
			'sub_title'=>$request->input('sub_title'),
			'gapropertyid'=>$request->input('gapropertyid'),
			'company_id'=>$company_id,
			'start_date'=>Carbon::createFromFormat('d-m-Y',$request->input('start_date')),
			'end_date'=>Carbon::createFromFormat('d-m-Y',$request->input('start_date'))->addMonths($request->input('duration'))->toDateTimeString()
		]);

		foreach ($request->input('language') as $lang_id) {
			$url = URL::create(['domain'=>$request->input('domain'),'subdomain'=>$request->input('subdomain'),'language_id'=>$lang_id,'iview_id'=>$iview->id]);
		}


		//$input = $request->all();
		return redirect('/iviews');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
