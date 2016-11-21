<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AddTrackerRequest;
use App\Tracker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JavaScript;

class TrackerController extends Controller
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
            $tool->load(['trackers','company','urls']);
            
            JavaScript::put([
                'foo' => 'bar'
            ]);
            return view('admin.trackers', compact('tool'));
        }
        return redirect('/login')->with('status', 'Insufficient Privilages!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tool = $request->get('product');
        $tool->load(['company']);
        $code=$this->generateTrackingCode();
        return view('admin.trackers_new', compact(['tool','code']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddTrackerRequest $request)
    {
        $tracker = Tracker::create($request->except(['_token']));
        return redirect('admin/tracking')->with('status', ['type'=>'success','message'=>'Tracker Created']);
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
     * @param  App\Tracker
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($subdomain, Tracker $tracker,Request $request)
    {
        $tracker->delete();
        if($request->ajax()){
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
        return redirect('/admin/trackers')->with('status', 'Tracker Deleted!');
    }

    private function generateTrackingCode($length = 10){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $max = 10;
        do {
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $max--;
            if($max==0) dd('toomuch');
        } while (Tracker::where('code',$randomString)->first());
        return $randomString;

    }

}
