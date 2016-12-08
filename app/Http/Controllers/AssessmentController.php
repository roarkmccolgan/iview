<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\Http\Requests;
use Carbon\Carbon;
use Excel;
use Illuminate\Http\Request;
use JavaScript;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $user->load(['roles']);

        $tool = $request->get('product');
        if($user->tools->contains($tool->id) || $user->hasRole('super')){
            $tool->load(['assessments','company','extra_fields']);
            //dd($tool);
            //return $tool;
            JavaScript::put([
                'foo' => 'bar'
            ]);
            return view('admin.assessments', compact('tool'));
        }
        return redirect('/login')->with('status', 'Insufficient Privilages!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Assessment
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($subdomain, Assessment $assessment,Request $request)
    {
        $assessment->delete();
        if($request->ajax()){
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
        return redirect('/admin/assessments')->with('status', 'Assessment deleted!');
    }

    /**
     * Download the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function downloadAssessments(Request $request)
    {
        //$assessment->destroy();
        if($request->ajax()){
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
        //return $request->input();
        $tool = $request->get('product');

        if($request->input('new')=='false'){
            $tool->load(['assessments' => function ($query) use($request) {
                $query->whereBetween('created_at', array(Carbon::parse($request->input('dateFrom')), Carbon::parse($request->input('dateTo'))->addYear()));
            }]);
        }else{
            $tool->load(['assessments' => function ($query) use($request) {
                $query->where('downloaded', false);
            }]);
        }
        $tool->assessments()->update(['downloaded' => 1]);

        $assessments = $tool->assessments->map(function($assessment){
            return collect($assessment->toArray())->only(['id','created_at','fname','lname','email','company','country','tel','referer','code','score','rating','result'])->all();
        });
        
        Excel::create($tool->title.' '.$tool->sub_title, function($excel) use ($assessments){
            $excel->sheet('Assessments', function($sheet) use($assessments) {
                $sheet->setOrientation('landscape');
                $sheet->fromModel($assessments);
            });
        })->export('xls');

        return redirect('/admin/assessments')->with('status', 'Insufficient Privilages!');
    }
}
