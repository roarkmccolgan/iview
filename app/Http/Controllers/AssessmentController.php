<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\ExtraFields;
use App\Http\Requests;
use App\Tracker;
use App\TrackerHits;
use Carbon\Carbon;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
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

        $tool = $request->session()->get('productObject');
        if ($user->tools->contains($tool->id) || $user->hasRole('super')) {
            $tool->load(['assessments' => function ($query) {
                $query->orderBy('created_at', 'asc');
            },'company','extra_fields']);
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
    public function delete($subdomain, Assessment $assessment, Request $request)
    {
        $loggedInUser = $request->user();
        if ($loggedInUser->hasAnyRole(['client','admin','super'])) {
            if (isset($assessment->code)) {
                $tracker = Tracker::where('code', $assessment->code)->first();
                if ($tracker->views>0) {
                    $tracker->decrement('views');
                }
                if ($tracker->completions>0) {
                    $tracker->decrement('completions');
                }

                $trackerHit = TrackerHits::whereDate('created_at', '=', $assessment->created_at->format('Y-m-d'))->where('type', 'view')->first();
                if ($trackerHit) {
                    $trackerHit->delete();
                }
                $trackerHit = TrackerHits::whereDate('created_at', '=', $assessment->created_at->format('Y-m-d'))->where('type', 'completion')->first();
                if ($trackerHit) {
                    $trackerHit->delete();
                }
            }
            $assessment->delete();
            $name = str_slug($assessment->fname.'_'.$assessment->lname.'_'.$assessment->tool->title.'_Assessment');
            if (File::exists(storage_path().'/reports/'.$assessment->id.'_'.$name.'.pdf')) {
                File::delete(storage_path().'/reports/'.$assessment->id.'_'.$name.'.pdf');
            }
            if ($request->ajax()) {
                $data = [
                    'result'=>'success'
                ];
                return $data;
            }
            return redirect('/admin/assessments')->with('status', 'Assessment deleted!');
        }
        abort(403, 'Access denied');
    }

    /**
     * Resend Assessment report to the user and optionally cc someone.
     *
     * @param  App\Assessment
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend($subdomain, Assessment $assessment, Request $request)
    {
        $bcc = $request->input('bcc') ? $request->input('bcc') : null;
        if ($bcc && strrpos($bcc, ';')!==false) {
            $bcc = array_map('trim', explode(";", $bcc));
        }
        $subject = trans(session('product.alias').'.email.subject');
        $viewData = [
            'assessment'=>$assessment,
        ];
        $data['html'] =  View::make('emails.download', $viewData)->render();

        //send mail to user
        Mail::queue('emails.echo', $data, function ($message) use ($assessment, $subject, $bcc) {
            $message->from('notifications@mg.idcready.net', 'IDC Notifications');
            $message->to($assessment->email, $assessment->fname.' '.$assessment->sname);
            $message->subject($subject);
            if($bcc){
                $message->bcc($bcc);
            }
        });
        if ($request->ajax()) {
            $data = [
                'result'=>'success',
                'bcc'=>$bcc
            ];
            return $data;
        }
        return redirect('/admin/assessments')->with('status', 'Assessment Resent!');
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
        if ($request->ajax()) {
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
            //return $request->input();
        $tool = $request->session()->get('productObject');

        if ($request->input('new')=='false') {
            $tool->load(['assessments' => function ($query) use ($request) {
                $query->whereBetween('created_at', [Carbon::parse($request->input('dateFrom')), Carbon::parse($request->input('dateTo'))->addYear()]);
            }]);
        } else {
            $tool->load(['assessments' => function ($query) use ($request) {
                $query->where('downloaded', false);
            }]);
        }
            //$assessments = Assessment::find(28);

        $tool->assessments()->update(['downloaded' => 1]);


        //columsn to download
        $chosenColumns = ['id','created_at','fname','lname','email','company','title','country','tel','referer','code','rating','extra','result'];


        //if client wants all answers to be sent.
        $cleanresults = $tool->assessments;

        if (config('baseline_'.session('product.id').'.overall.include_answers_in_download_report')) {
            $cleanresults = $tool->assessments->map(function ($item, $key) {
                $item->quiz = collect($item->quiz)->flatmap(function ($quiz) use ($item) {
                    return collect($quiz['pages'])->flatmap(function ($pages) use ($item) {
                        return collect($pages['questions'])->flatmap(function ($question, $key) use ($item) {
                            if (isset($question['selected'])) {
                                return collect([$key=>$question['selected']]);
                            }
                            Log::info('answer not captured: '.$item->id.'\n '.$question['question']);
                            return collect([$key=>'answer not captured ']);
                        });
                    });
                });
                $itemLang = '';
                if ($item->lang) {
                    $itemLang = $item->lang == 'en' ? '/' : '/'.$item->lang;
                }
                $item->report = session('url').$itemLang.'/download/'.$item->uuid.'?update=false';
                return collect($item);
            });
            $chosenColumns[] = 'quiz';
            $chosenColumns[] = 'report';
        }

        $assessments = $cleanresults->map(function ($assessment) use ($chosenColumns) {
            return collect($assessment->toArray())->only($chosenColumns)->all();
        });
        $assessments = $assessments->toArray();

        $telNum = null;
        $cols = 0;
        foreach ($assessments as $assKey => $assessment) {
            if (is_null($telNum)) {
                $telNum = array_search("tel", array_keys($assessment));
            }
            if (!is_null($assessment['extra']) && $assessment['extra']!='null' && (is_array($assessment['extra']) || is_object($assessment['extra']))) {
                foreach ($assessment['extra'] as $exKey => $extra) {
                    if (!is_null($extra)) {
                        $assessments[$assKey][ucfirst($exKey)] = $extra;
                    }
                }
            }
            unset($assessments[$assKey]['extra']);
            if(isset($assessment['result']) && $assessment['result'] != '[]'){
                foreach ($assessment['result'] as $resKey => $result) {
                    if ($resKey!='overall') {
                        if (isset($result['rating'])) {
                            $assessments[$assKey][trans($tool->alias.'.'.$resKey.'.title')] = trans($tool->alias.'.'.$result['rating']);
                        } else {
                            $assessments[$assKey][trans($tool->alias.'.'.$resKey.'.title')] = "";
                        }
                    }
                }
                unset($assessments[$assKey]['result']);
            }

            if (isset($assessment['quiz']) && !is_null($assessment['quiz']) && $assessment['quiz']!='null' && (is_array($assessment['quiz']) || is_object($assessment['quiz']))) {
                foreach ($assessment['quiz'] as $qKey => $q) {
                    if (is_array($q)) {
                        $num = 1;

                        foreach ($q as $key => $value) {
                            if (is_array($value)) {
                                $newKey = strpos($key, 'q') === false ? 'q'.str_replace(".", "_", $value['name']) : $value['name'];
                                $assessments[$assKey][$newKey] = $value['label'];
                                $num++;
                            } else {
                                $newKey = strpos($key, 'q') === false ? $qKey.'_'.$num : str_replace(".", "_", $key);
                                //echo $newKey;
                                $assessments[$assKey][$newKey] = substr($value, 0, stripos($value, '|'));
                                $num++;
                            }
                        }
                    } else {
                        $assessments[$assKey][$qKey] = substr($q, 0, stripos($q, '|'));
                        ;
                    }
                }
                unset($assessments[$assKey]['quiz']);
            }
            $cols = count($assessments[$assKey]) > $cols ? count($assessments[$assKey]) : $cols;
        }
        
        $alphas = range('A', 'Z');

        Excel::create(str_slug($tool->title.' '.$tool->sub_title), function ($excel) use ($assessments, $cols, $alphas, $telNum) {
            $excel->sheet('Assessments', function ($sheet) use ($assessments, $cols, $alphas, $telNum) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray($assessments);

                $sheet->cells('A1', function ($cells) {
                    $cells->setBackground('#EFEFEF');
                    $cells->setFont([
                        //'family'     => 'Calibri',
                        //'size'       => '14',
                        'bold'       =>  true
                        ]);
                });
                $sheet->freezeFirstRow();
                /*$sheet->setColumnFormat(array(
	                $alphas[$telNum+1] => '[<=9999999]###-####;(###) ###-####'
	                ));*/
            });
        })->export('xls');

        return redirect('/admin/assessments')->with('status', 'Insufficient Privilages!');
    }
}
