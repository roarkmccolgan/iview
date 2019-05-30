<?php

namespace App\Http\Controllers;

use App\CustomClasses\ItalyAssessment\ItalyClass;
use App\Http\Requests;
use App\Tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Lava;
use PDF;

class ItalyController extends Controller
{
    public function index(Request $request)
    {
        $tool = $request->get('product');
        $utm = $request->utm;
        if ($utm) {
            $tracker = Tracker::where('tool_id', session('product.id'))
                >where('code', $utm)->first();
            if ($tracker) {
                $tracker->increment('views');
                $trackerHit = $tracker->trackerHits()->create([
                'type' => 'view',
                ]);
            }
        }
        return view('tool.italyassessment.assessment', ['tool' => $tool, 'utm' => $utm]);
    }

    public function report(Request $request)
    {
        $uuid = $request->uuid;
        $utm = $request->utm;
        $italyClass = new ItalyClass();
        $italyClass->loadAssessment($uuid, $utm);
        $assessment = $italyClass->getAssessment();

        //send email
        $subject = "DataBench Self-Assessment Report";
        $inline = false;
        
        $viewData = [
            'assessment'=>$assessment,
            'inline'=>$inline,
        ];
        $data['html'] =  View::make('tool.italyassessment.emails.download', $viewData)->render();

        //send mail to user (and BCC if exists)
        $bcc = [];
        if (Config::has('baseline_'.session('product.id').'.overall.notifications.bccreports')) {
            foreach (config('baseline_'.session('product.id').'.overall.notifications.bccreports') as $address) {
                $bcc[] = $address;
            }
        }

        if($assessment->wasRecentlyCreated){
            Mail::queue('tool.italyassessment.emails.echo', $data, function ($message) use ($assessment, $subject, $bcc) {
                $message->from('notifications@mg.idcready.net', 'IDC Notifications');
                $message->to($assessment['email'], $assessment['fname'].' '.$assessment['lname']);
                if (!empty($bcc)) {
                    $message->bcc($bcc);
                }
                $message->subject($subject);
            });

            //send mail to notification people
            $emails = [];
            if (App::isLocal() || $assessment['email']=='rmccolgan@idc.com') {
                $emails = ['roarkmccolgan@gmail.com'];
            } else {
                if ($assessment->tool_id != 5) { //spunk
                    foreach ($assessment->tool->users as $user) {
                        $emails[] = $user->email;
                    }
                } else {
                    $emails[] = 'roarkmccolgan@gmail.com';
                }
            }
            $remove = [];
            if (Config::has('baseline_'.session('product.id').'.overall.notifications.ignoreadmin')) {
                foreach (config('baseline_'.session('product.id').'.overall.notifications.ignoreadmin') as $address) {
                    $remove[] = $address;
                }
            }
            $emails = array_diff($emails, $remove);
            $subject = $assessment->tool->title.' Completed';
            
            Mail::queue(
                'tool.italyassessment.emails.notification',
                [
                'companyName' => $assessment->tool->company->name,
                'toolTitle' => $assessment->tool->title,
                'fname'=> $assessment->fname,
                'sname'=> $assessment->lname,
                'email'=> $assessment->email,
                'company'=> $assessment->company,
                ],
                function ($message) use ($emails, $subject) {
                    $message->from('notifications@mg.idcready.net', 'IDC Notifications');
                    $message->to($emails)->subject($subject);
                }
            );
        }else{
            $msg = "You were already sent an email, if you never received it and have checked your junk folder, please <a href='mailto:info@databench.eu?subject=Report Not Received' class='text-blue-800'>let us know</a>";
        }
        
        return view('tool.italyassessment.thankyou', ['msg'=>$msg ?? '']);
    }

    public function pdf(Request $request)
    {
        $uuid = $request->uuid;
        $utm = $request->utm;
        $italyClass = new ItalyClass();
        $html = $italyClass->loadAssessment($uuid, $utm);
        $html = $italyClass->loadHtml();
        $assessment = $italyClass->getAssessment();
        $name = $italyClass->getName();
        $project = $italyClass->getProject();
        $organization = $italyClass->getOrganization();
        //return view('tool.italyassessment.report.report', ['report' => $html]);
        $pdf = PDF::loadView('tool.italyassessment.report.report', ['report'=>$html, 'name' => $name, 'project' => $project, 'organization' => $organization, 'pdf'=>true])
            ->setOption('margin-top', 28)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0)
            //->setOption('window-status', 'chartrendered')
            ->setOption('header-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/header')
            ->setOption('header-spacing', 8)
            ->setOption('footer-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/footer')
            ->setOption('footer-spacing', 2);
            //->setOption('replace', $headervars);
            
        return $pdf->inline($assessment->tool->title.'.pdf');
    }
}
