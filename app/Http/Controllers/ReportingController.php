<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Iview;
use Illuminate\Http\Request;


class ReportingController extends Controller {

	public function reporting()
	{
		$iveiws = Iview::all();

		return view('reporting.index',compact('iviews'));
	}

}
