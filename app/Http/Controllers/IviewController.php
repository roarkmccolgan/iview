<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Iview;
use App\Company;
use Illuminate\Http\Request;


class IviewController extends Controller {

	public function index()
	{
		$iviews = Iview::all();

		return view('iview.index',compact('iviews'));
	}

	public function create()
	{
		$companies = Company::all();
		return view('iview.create',compact('companies'));
	}

}
