<?php namespace App\Http\Controllers;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateIviewRequest;
use App\Iview;
use App\language;
use App\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IviewController extends Controller
{
    /**
     * List all iViews
     * @return view
     */
    public function index()
    {

        $companies = Company::has('iviews')->get();
        return view('iview.index', compact('companies'));
    }
    /**
     * Create New iView
     * @return view
     */
    public function create()
    {
        $companies = Company::all();
        $languages = language::lists('name', 'id');
        return view('iview.create', compact(['companies','languages']));
    }
    /**
     * Save a new iView
     * @param  CreateIviewRequest $request
     * @return Response
     */
    public function store(CreateIviewRequest $request)
    {
        if (!$request->has('company_id')) {
            $company = Company::create(['name'=>$request->input('new_company'),'logo'=>'','colours'=>$request->input('colours')]);
            $company_id = $company->id;
        } else {
            $company_id = $request->input('company_id');
        }

        $iview = iView::create([
            'title'=>$request->input('title'),
            'alias'=>str_slug($request->input('title')),
            'sub_title'=>$request->input('sub_title'),
            'gapropertyid'=>$request->input('gapropertyid'),
            'company_id'=>$company_id,
            'start_date'=>Carbon::createFromFormat('d-m-Y', $request->input('start_date')),
            'end_date'=>Carbon::createFromFormat('d-m-Y', $request->input('start_date'))->addMonths($request->input('duration'))->toDateTimeString()
        ]);

        foreach ($request->input('language') as $lang_id) {
            $url = $iview->urls()->create(['domain'=>$request->input('domain'),'subdomain'=>$request->input('subdomain'),'language_id'=>$lang_id]);
        }


        //$input = $request->all();
        return redirect('/admin/iviews');
    }
}
