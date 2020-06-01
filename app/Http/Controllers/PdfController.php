<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Lava;
use PDF;
use mikehaertl\pdftk\Pdf as NewPDF;
use LynX39\LaraPdfMerger\Facades\PdfMerger;

require_once base_path('vendor/goat1000/svggraph/SVGGraph.php');

class PdfController extends Controller
{
    /**
     * List all iViews
     * @return view
     */
    public function wkhtml(Request $request)
    {
        $chartSettings = [
            'title' => null,
            'backgroundColor' => [
                'fill'=>'transparent'
            ],
            'vAxis' => [
                'baselineColor'=>'none',
                'gridlines'=> [
                    'color'=> 'none'
                ]
            ],
            'hAxis' => [
                'textStyle' => [
                    'fontName' => 'Helvetica-light',
                    /*'fontSize' => 18,*/
                    /*'bold' => true,*/
                    /*'italic' => true,*/
                    // The color of the text.
                    'color' => '#939598',
                    // The color of the text outline.
                    /*'auraColor' => '#d799ae',*/
                    // The transparency of the text.
                    /*'opacity' => 0.8*/
                ]
            ],
            'legend' => ['position'=> 'bottom'],
            'colors' => ['#68aadd'],
            'chartArea' => ['width'=>'100%', 'height'=>'80%'],
            'legend' => [ 'position' => "none" ],
            'events' => [
                'ready' => 'chartReady'
            ],
            'annotations'=>[
                'stem'=>[
                    'color'=>'transparent'
                ],
                'textStyle'=>[
                    /*'fontName'=> 'Times-Roman',
					*/'fontSize'=> 14,
                    /*'bold'=> true,
					'italic'=> true,*/
                    // The color of the text.
                    'color'=> '#000000',
                    // The color of the text outline.
                    // 'auraColor'=> '#d799ae',
                    // The transparency of the text.
                    /*'opacity'=> 0.8*/
                ]
            ],
            /*'isStacked' => true,*/
            'bar'  => [
                'groupWidth'=> '70%'

            ] //As a percent, "33%"
        ];

        $vars = [];
        $vars['pdf'] = $request->query('pdf') ? true : false;
        $count = 0;
        $headervars = [];
        $headervars['tool_title'] = trans(session('product.alias').'.title');
        $headervars['sub-title'] = trans(session('product.alias').'.sub-title');
        $headervars['company_alias'] = session('company.alias');
        $headervars['tool_id'] = session('product.id');
        $headervars['template'] = session('template');
        $locale = App::getLocale();
        $region = 'na';
        if (session('product.id')==6) {
            foreach (config('terminal.regions') as $key => $value) {
                if (array_search(session('questions.screeners.pages.page1.questions.s1.selected'), $value)!==false) {
                    $region = $key;
                }
            }
        }
        
        if (session('product.id')==5) { //splunk
            $widthstage = [13, 38, 65, 90, 118];
            $sectionVars = [];

            foreach (config('baseline_'.session('product.id')) as $section => $values) {
                if ($section!=='overall') {
                    preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
                    $sectionnumber =  (int)$matches[0][0];
                    $sectionwidthuser = $widthstage[$sectionnumber-1];
                    $widthsection = $widthstage[$values['benchmark-country-'.$locale]-1];

                    $sectionVars[] = [
                        'widthuser' => $sectionwidthuser,
                        'width' => $widthsection,
                        'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
                        'score' => session('result.'.$section.'.score'),
                    ];
                }
            }


            //User overall stage number and ordinal
            preg_match_all('/\d+/', session('result.overall.rating'), $matches);
            $number =  (int)$matches[0][0];
            $ends = ['th','st','nd','rd','th','th','th','th','th','th'];
            if (($number %100) >= 11 && ($number%100) <= 13) {
                $ordinal = 'th';
            } else {
                $ordinal = $ends[$number % 10];
            }

            //country benchmark by language
            $overallcountrynumber = config('baseline_'.session('product.id').'.overall.benchmark-country-'.$locale);
            if ($number > $overallcountrynumber) {
                $overalllang = $number-$overallcountrynumber.' '.str_plural('level', $number-$overallcountrynumber).' ahead of the global leaders';
            } elseif ($number == $overallcountrynumber) {
                $overalllang = 'Inline with the global leaders';
            } else {
                $overalllang = $overallcountrynumber-$number.' '.str_plural('level', $overallcountrynumber-$number).' behind the global leaders';
            }

            //company size benchmark by language
            $demographicsizeanswer = session('questions.screeners.pages.page1.questions.s1.selected');
            $demographicsizeanswer = explode('|', $demographicsizeanswer);
            $demographicsizeanswer = str_replace(" ", "-", $demographicsizeanswer[0]);
            $overallsizenumber = config('baseline_'.session('product.id').'.overall.benchmark-size-'.$demographicsizeanswer);
            if ($number > $overallsizenumber) {
                $overallsize = $number-$overallsizenumber.' '.str_plural('level', $number-$overallsizenumber).' ahead of the leaders in companies of the same size';
            } elseif ($number == $overallsizenumber) {
                $overallsize = 'Inline with the leaders in companies of the same size';
            } else {
                $overallsize = $overallsizenumber-$number.' '.str_plural('level', $overallsizenumber-$number).' behind the leaders in companies of the same size';
            }

            //bar widths
            $widthuser = $widthstage[$number-1];
            $widthlang = $widthstage[$overallcountrynumber-1];
            $widthsize = $widthstage[$overallsizenumber-1];



            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'percent'=>config('baseline_'.session('product.id').'.overall.types.'.session('result.overall.rating').'.benchmark'),
                    'ordinal'=>$ordinal,
                    'number'=>$number,
                    'stage'=>$number,
                    'overalllang'=>$overalllang,
                    'overallsize'=>$overallsize,
                    'widthuser' => $widthuser.'mm;',
                    'widthlang' => $widthlang.'mm;',
                    'widthsize' => $widthsize.'mm;',
                    'widthuser-security-strategy' => $sectionVars[0]['widthuser'].'mm;',
                    'width-security-strategy' => $sectionVars[0]['width'].'mm;',
                    'security-strategy-rating' => $sectionVars[0]['rating'],
                    'security-strategy-score' => $sectionVars[0]['score'],

                    'widthuser-incident-detection' => $sectionVars[1]['widthuser'].'mm;',
                    'width-incident-detection' => $sectionVars[1]['width'].'mm;',
                    'incident-detection-rating' => $sectionVars[1]['rating'],
                    'incident-detection-score' => $sectionVars[1]['score'],

                    'widthuser-incident-response' => $sectionVars[2]['widthuser'].'mm;',
                    'width-incident-response' => $sectionVars[2]['width'].'mm;',
                    'incident-response-rating' => $sectionVars[2]['rating'],
                    'incident-response-score' => $sectionVars[2]['score'],
                    'sectionbg' => asset('/images/tools/5/section_graph_bg.svg'),
                    'overallbg' => asset('/images/tools/5/overall_graph_bg.svg')
                ]
            );

            $sectionCopy = '';

            $customCopy = '';
            //a1
            $selected = session('questions.security-strategy.pages.page1.questions.q1.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value == 2 || $value == 4) {
                $customCopy.= trans(session('product.alias').'.a1-a');
            }
            if ($value == 6) {
                $customCopy.= trans(session('product.alias').'.a1-b');
            }

            //a5
            $selected = session('questions.security-strategy.pages.page3.questions.q3.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value == 2 || $value == 4) {
                $customCopy.= trans(session('product.alias').'.a5-a');
            }
            if ($value == 6) {
                $customCopy.= trans(session('product.alias').'.a5-b');
            }
            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.security-strategy-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }

            //a7 slider
            $selected = session('questions.incident-detection.pages.page1.questions.q4.selected');
            $valHold = 0;
            foreach ($selected as $choice) {
                $value = explode('|', $choice);
                $value = $value[1];
                $valHold+=$value;
            }
            $value = $valHold;

            if ($value == 2.5) {
                $customCopy.= trans(session('product.alias').'.a7-a');
            }
            if ($value == 3.5) {
                $customCopy.= trans(session('product.alias').'.a7-b');
            }

            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.incident-detection-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }

            //a8
            $selected = session('questions.incident-response.pages.page1.questions.q7.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value <= 2) {
                $customCopy.= trans(session('product.alias').'.a8-a');
            }
            if ($value == 3) {
                $customCopy.= trans(session('product.alias').'.a8-b');
            }

            //a11
            $selected = session('questions.incident-response.pages.page2.questions.q8.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value <= 2) {
                $customCopy.= trans(session('product.alias').'.a11-a');
            }
            
            //a11b
            $selected = session('questions.incident-response.pages.page4.questions.q10.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value <= 3) {
                $customCopy.= trans(session('product.alias').'.a11b-a');
            }

            //a13
            $selected = session('questions.incident-response.pages.page5.questions.q11.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value <= 2) {
                $customCopy.= trans(session('product.alias').'.a13-a');
            }
            if ($value == 3) {
                $customCopy.= trans(session('product.alias').'.a13-a');
            }

            //a14
            $selected = session('questions.incident-response.pages.page6.questions.q12.selected');
            $value = explode('|', $selected);
            $value = (int) $selected[1];
            if ($value <= 2) {
                $customCopy.= trans(session('product.alias').'.a14-a');
            }
            if ($value == 3) {
                $customCopy.= trans(session('product.alias').'.a14-b');
            }
            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.incident-response-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }
            $vars['sectionCopy'] = $sectionCopy;
            //end stuff
            $vars['summary'] = trans(session('product.alias').'.summary');
            ;

            $vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
            $vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
            $vars['questions'] = session('questions');
        } elseif (session('product.id')==6) { //btmcafee
            $widthstage = [13, 38, 65, 90, 118];
            $sectionVars = [];

            foreach (config('baseline_'.session('product.id')) as $section => $values) {
                if ($section!=='overall') {
                    preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
                    $sectionnumber =  (int)$matches[0][0];
                    $sectionwidthuser = $widthstage[$sectionnumber-1];
                    $widthsection = $widthstage[$values['benchmark-country-'.$region]-1];

                    $sectionVars[] = [
                        'widthuser' => $sectionwidthuser,
                        'width' => $widthsection,
                        'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
                        'score' => session('result.'.$section.'.score'),
                    ];
                }
            }


            //User overall stage number and ordinal
            preg_match_all('/\d+/', session('result.overall.rating'), $matches);
            $number =  (int)$matches[0][0];
            $ends = ['th','st','nd','rd','th','th','th','th','th','th'];
            if (($number %100) >= 11 && ($number%100) <= 13) {
                $ordinal = 'th';
            } else {
                $ordinal = $ends[$number % 10];
            }

            //country benchmark by language
            $overallcountrynumber = config('baseline_'.session('product.id').'.overall.benchmark-country-'.$region);

            if ($number > $overallcountrynumber) {
                $overalllang = $number-$overallcountrynumber.' '.str_plural('level', $number-$overallcountrynumber).' ahead of the global leaders';
            } elseif ($number == $overallcountrynumber) {
                $overalllang = 'Inline with the global leaders';
            } else {
                $overalllang = $overallcountrynumber-$number.' '.str_plural('level', $overallcountrynumber-$number).' behind the global leaders';
            }

            //company size benchmark by language
            $demographicsizeanswer = session('questions.screeners.pages.page2.questions.s2.selected');
            
            $demographicsizeanswer = explode('|', $demographicsizeanswer);
            $demographicsizeanswer = strtolower(str_replace([" ",","], ["-",""], $demographicsizeanswer[0]));

            $overallsizenumber = config('baseline_'.session('product.id').'.overall.benchmark-size-'.$demographicsizeanswer);

            if ($number > $overallsizenumber) {
                $overallsize = $number-$overallsizenumber.' '.str_plural('level', $number-$overallsizenumber).' ahead of the leaders in companies of the same size';
            } elseif ($number == $overallsizenumber) {
                $overallsize = 'Inline with the leaders in companies of the same size';
            } else {
                $overallsize = $overallsizenumber-$number.' '.str_plural('level', $overallsizenumber-$number).' behind the leaders in companies of the same size';
            }

            //bar widths
            $widthuser = $widthstage[$number-1];
            $widthlang = $widthstage[$overallcountrynumber-1];
            $widthsize = $widthstage[$overallsizenumber-1];



            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'percent'=>config('baseline_'.session('product.id').'.overall.types.'.session('result.overall.rating').'.benchmark'),
                    'ordinal'=>$ordinal,
                    'number'=>$number,
                    'stage'=>$number,
                    'overalllang'=>$overalllang,
                    'overallsize'=>$overallsize,
                    'widthuser' => $widthuser.'mm;',
                    'widthlang' => $widthlang.'mm;',
                    'widthsize' => $widthsize.'mm;',
                    'widthuser-security-strategy' => $sectionVars[0]['widthuser'].'mm;',
                    'width-security-strategy' => $sectionVars[0]['width'].'mm;',
                    'security-strategy-rating' => $sectionVars[0]['rating'],
                    'security-strategy-score' => $sectionVars[0]['score'],

                    'widthuser-incident-detection' => $sectionVars[1]['widthuser'].'mm;',
                    'width-incident-detection' => $sectionVars[1]['width'].'mm;',
                    'incident-detection-rating' => $sectionVars[1]['rating'],
                    'incident-detection-score' => $sectionVars[1]['score'],

                    'widthuser-incident-response' => $sectionVars[2]['widthuser'].'mm;',
                    'width-incident-response' => $sectionVars[2]['width'].'mm;',
                    'incident-response-rating' => $sectionVars[2]['rating'],
                    'incident-response-score' => $sectionVars[2]['score'],
                    'overallbg' => asset('images/tools/6/overall_graph_bg.svg'),
                    'sectionbg' => asset('images/tools/6/section_graph_bg.svg'),
                ]
            );

            $sectionCopy = '';
            $customCopy = '';

            //Integration automation
            $value = session('result.integration.score') + session('result.automation.score');
            if ($value > 37.52) {
                $customCopy.= trans(session('product.alias').'.integration-automation-good');
            }
            if ($value >= 22.51 && $value <= 30) {
                $customCopy.= trans(session('product.alias').'.integration-automation-moderate');
            }
            if ($value <= 22.50) {
                $customCopy.= trans(session('product.alias').'.integration-automation-weak');
            }

            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.integration-automation-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }
            

            //Integration automation
            $value = session('result.integration.score') + session('result.automation.score');
            if ($value > 37.52) {
                $customCopy.= trans(session('product.alias').'.integration-automation-good');
            }
            if ($value >= 22.51 && $value <= 30) {
                $customCopy.= trans(session('product.alias').'.integration-automation-moderate');
            }
            if ($value <= 22.50) {
                $customCopy.= trans(session('product.alias').'.integration-automation-weak');
            }

            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.integration-automation-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }

            //Unified Intelligence
            $value = session('result.unified-intelligence.score');
            if ($value > 18.76) {
                $customCopy.= trans(session('product.alias').'.unified-good');
            }
            if ($value >= 15.01 && $value <= 18.75) {
                $customCopy.= trans(session('product.alias').'.unified-moderate');
            }
            if ($value <= 15) {
                $customCopy.= trans(session('product.alias').'.unified-weak');
            }

            if ($customCopy!='') {
                $sectionCopy.= trans(session('product.alias').'.unified-heading');
                $sectionCopy.= $customCopy;
                $customCopy = '';
            }

            //here

            $vars['sectionCopy'] = $sectionCopy;
            
            $vars['summary'] = trans(session('product.alias').'.summary', [
                'link1' => asset('/images/tools/6/link-01.png'),
                'link2' => asset('/images/tools/6/link-02.png'),
                'link3' => asset('/images/tools/6/link-03.png'),
            ]);

            $vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
            $vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
            $vars['questions'] = session('questions');
        } elseif (session('product.id')==7) {
            //User overall stage number and ordinal
            preg_match_all('/\d+/', session('result.overall.rating'), $matches);
            $number =  (int)$matches[0][0];
            $ends = ['th','st','nd','rd','th','th','th','th','th','th'];
            if (($number %100) >= 11 && ($number%100) <= 13) {
                $ordinal = 'th';
            } else {
                $ordinal = $ends[$number % 10];
            }
            $maturitygraph = session('locale') == '' ? 'maturity.svg' : 'maturity_'.session('locale').'.svg';

            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'maturitygraph' => asset('images/tools/7/'.$maturitygraph),
                ]
            );

            $sectionCopy = '';
            $customCopy = '';

            //overall
            $value = session('result.overall.score');

            $q1 = $this->getQuestionScore(1, 'gdpr');
            $q7 = $this->getQuestionScore(7, 'gdpr');

            $customCopy.= trans(session('product.alias').'.overallintro');

            if ($q1+$q7 < 5) {
                $customCopy.= trans(session('product.alias').'.overallstage1');
            }
            if ($q1+$q7 == 5 || $q1+$q7 == 6 || $q1+$q7 == 7) {
                $customCopy.= trans(session('product.alias').'.overallstage2');
            }
            if ($q1+$q7 > 7) {
                $customCopy.= trans(session('product.alias').'.overallstage4');
            }

            //Dynamic
            if ($q1==1 || $q1==2) {
                $customCopy.= trans(session('product.alias').'.overallq1aorb');
            }
            if ($q1==3 || $q1==4) {
                $customCopy.= trans(session('product.alias').'.overallq1cord');
            }
            if ($q1==5) {
                $customCopy.= trans(session('product.alias').'.overallq1e');
            }


            if ($q7==4) {
                $customCopy.= trans(session('product.alias').'.overallq7a');
            }
            if ($q7==3 || $q7==2) {
                $customCopy.= trans(session('product.alias').'.overallq7borc');
            }
            if ($q7==1) {
                $customCopy.= trans(session('product.alias').'.overallq7d');
            }

            
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= '<div class="spacer"></div>';

            //Data Awareness
            $q4 = $this->getQuestionScore(4, 'gdpr');
            $q5 = $this->getQuestionScore(5, 'gdpr');

            $customCopy.= trans(session('product.alias').'.dataawarenessintro');

            if ($q4+$q5 < 20) {
                $customCopy.= trans(session('product.alias').'.dataawarenessstage1');
            }
            if ($q4+$q5 >= 20 && $q4+$q5 <= 25) {
                $customCopy.= trans(session('product.alias').'.dataawarenessstage2');
            }
            if ($q4+$q5 > 25) {
                $customCopy.= trans(session('product.alias').'.dataawarenessstage4');
            }

            //Dynamic
            if ($q4==1 || $q4==2) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q5aorb');
            }
            if ($q4==3 || $q4==4) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q5cord');
            }
            if ($q4==5) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q5e');
            }
            if ($q5<18) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q5lt18');
            }
            if ($q5>=18 && $q5<=24) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q518to24');
            }
            if ($q5>24) {
                $customCopy.= trans(session('product.alias').'.dataawareness_q5gt24');
            }

            $customCopy.= '<div class="pb"></div>';
            $customCopy.= '<div class="spacer"></div>';

            //Risk
            $q6 = $this->getQuestionScore(6, 'gdpr');
            $q8 = $this->getQuestionScore(8, 'gdpr');
            $q9 = $this->getQuestionScore(9, 'gdpr');

            $customCopy.= trans(session('product.alias').'.riskintro');

            if ($q6+$q9 < 14) {
                $customCopy.= trans(session('product.alias').'.riskstage1');
            }
            if ($q6+$q9 >= 14 && $q6+$q9 <= 17) {
                $customCopy.= trans(session('product.alias').'.riskstage2');
            }
            if ($q6+$q9 > 17) {
                $customCopy.= trans(session('product.alias').'.riskstage4');
            }


            // if($q9<9){
            // 	$customCopy.= trans(session('product.alias').'.risk_q7lt9');
            // }
            // if($q9==9 || $q9==10){
            // 	$customCopy.= trans(session('product.alias').'.risk_q79or10');
            // }
            // if($q9>10){
            // 	$customCopy.= trans(session('product.alias').'.risk_q7gt10');
            // }
            if ($q6==2) {
                $customCopy.= trans(session('product.alias').'.risk_q112');
            }
            if ($q6==3) {
                $customCopy.= trans(session('product.alias').'.risk_q113');
            }
            if ($q6==4) {
                $customCopy.= trans(session('product.alias').'.risk_q114');
            }

            //non scoring
            //if stage 1 or 2
            if (session('result.overall.rating')=='stage1' || session('result.overall.rating')=='stage2') {
                if ($q8<15) {
                    $customCopy.= trans(session('product.alias').'.riskstage1or2_q10lt15');
                }
                if ($q8>=15 && $q8<=27) {
                    $customCopy.= trans(session('product.alias').'.riskstage1or2_q10between15and27');
                }
                if ($q8>27) {
                    $customCopy.= trans(session('product.alias').'.riskstage1or2_q10gt28');
                }
            }
            //if stage 4
            if (session('result.overall.rating')=='stage4') {
                if ($q8<15) {
                    $customCopy.= trans(session('product.alias').'.riskstage4_q10lt15');
                }
                if ($q8>=15 && $q8<=27) {
                    $customCopy.= trans(session('product.alias').'.riskstage4_q10between15and27');
                }
                if ($q8>27) {
                    $customCopy.= trans(session('product.alias').'.riskstage4_q10gt28');
                }
            }

            $q9text = $this->getAnswerText(9, 'gdpr');


            if (in_array("Lack of GDPR compliance knowledge", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9a');
            }
            if (in_array("Lack of budget", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9b');
            }
            if (in_array("Limited resources", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9c');
            }
            if (in_array("Conflicting priorities", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9d');
            }
            if (in_array("Not enough collaboration between the GDPR compliance team and other stakeholders", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9e');
            }
            if (in_array("Fragmentation or lack of integration of Big Data, reporting, and analytics portfolio", $q9text)) {
                $customCopy.= trans(session('product.alias').'.non9f');
            }


            $vars['sectionCopy'] = $customCopy;
            
            $vars['summary'] = Lang::has(session('product.alias').'.summary') ? trans(session('product.alias').'.summary'): '';

            $vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
            $vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
            $vars['questions'] = session('questions');
        } elseif (session('product.id')==8) { //ntt
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $infrastructureNumber =  (int) filter_var(session('result.infrastructure.rating'), FILTER_SANITIZE_NUMBER_INT);
            $intelligenceNumber =  (int) filter_var(session('result.intelligence.rating'), FILTER_SANITIZE_NUMBER_INT);
            $operationsNumber =  (int) filter_var(session('result.operations.rating'), FILTER_SANITIZE_NUMBER_INT);
            

            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'image'=>asset('images/tools/8/descriptions'.session('locale').'.png'),
                ]
            );

            $customCopy = '';

            //overall
            $rating = session('result.overall.rating');
            $settings = [
                'use_iconv'=> false,
                'back_image'=>asset('images/tools/8/comparisonbg'.session('localeUrl').'.png?id=1'),
                'back_image_width'=> 570,
                'back_image_height'=> 320,
                'pad_top'=>45,
                'pad_right'=>0,
                'pad_bottom'=>23,
                'pad_left'=>114,
                'back_colour' => 'none',
                'stroke_colour' => 'none',
                'back_stroke_width' => 0, 'back_stroke_colour' => 'none',
                'show_axes' => false,
                'axis_max_h' => 30,
                'axis_min_h' => 0,
                'axis_stroke_width' => 1,
                'axis_colour' => '#efefef',
                'axis_text_colour' => '#999',
                'axis_overlap' => 2,
                'axis_font' => 'Frutiger Neue LT W1G', 'axis_font_size' => 12,
                'bar_space' => 20,
                'group_space' => 1,
                'grid_colour' => 'none',
                'show_data_labels' => false,
                'data_label_colour' => 'white',
                'data_label_font_size' => 14,
                'data_label_outline_thickness' => 1,
                'data_label_back_colour' => 'rgba(0,0,0,0.2)',
                'data_label_space' => '6',
                'label_colour' => '#000',

                'link_base' => '/',
                'link_target' => '_top',
                'minimum_grid_spacing' => 20,
                'structured_data' => true,
                'structure' => [
                    'key' => 'label',
                    'value' => 'score',
                    'colour' => 'colour'
                ]
            ];

            $base = config('baseline_'.session('product.id').'.overall');
            $comparisons = ['industry'];
            
            $vertical_base = $base['baseline'];
            $verticals = [
                'banking-other-financial-services'=>'banking &amp; other financial services',
                'insurance'=>'insurance',
                'retail-trade'=>'retail trade',
                'wholesale-trade'=>'wholesale trade',
                'business-professional-services'=>'business/professional services',
                'software-and-it-services'=>'software and it services',
                'telecoms'=>'telecoms',
                'media'=>'media',
                'manufacturing'=>'manufacturing',
                'transportation'=>'transportation',
                'utilities-oil-gas'=>'utilities &amp; oil/gas',
                'private-education'=>'private education',
                'private-healthcare-service-providers'=>'private healthcare service providers'
            ];
            if (collect($verticals)->contains(strtolower(session('user.extra.industry')))) {
                $vertical_base = $base['benchmark-vertical-'.array_search(strtolower(session('user.extra.industry')), $verticals)];
            }

            $organisation_base = $base['baseline'];
            $orgsizes = ['500-to-999'=>'500 to 999','1000-to-4999'=>'1,000 to 4,999','5000+'=>'5,000 or more'];
            if (collect($orgsizes)->contains(session('user.extra.company_size'))) {
                $comparisons[] = 'company';
                $organisation_base = $base['benchmark-size-'.array_search(session('user.extra.company_size'), $orgsizes)];
            }

            $geographic_base = $base['baseline'];
            $countries = ['en'=>'United Kingdom','fr'=>'France','de'=>'Germany'];
            if (collect($countries)->contains(session('user.country'))) {
                $comparisons[] = 'country';
                $geographic_base = $base['benchmark-country-'.array_search(session('user.country'), $countries)];
            }
            $comparisons = collect($comparisons);

            
            //Mean Calculation for user
            $user_score = 0;
            $actual_score = session('result.overall.score');
            switch (session('result.overall.rating')) {
                case 'stage1':
                    $user_score = (($actual_score - 9)*10)/18;
                    break;
                case 'stage2':
                    $user_score = ((($actual_score - 27)*10)/6)+10;
                    break;
                case 'stage3':
                    $user_score = ((($actual_score - 33)*10)/12)+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

            $values = [];
            $graphbg = 'comparisonbg'.session('locale');
            $graphHeight = 320;

            if ($comparisons->count()==3) {
                $values[] = [
                    'label' => 'Geographic Region',
                    'score' => $geographic_base,
                    'colour' => '#9E3D91'
                ];
                $values[] = [
                    'label' => 'Organization Size',
                    'score' => $organisation_base,
                    'colour' => '#9E3D91'
                ];
                $values[] = [
                    'label' => 'Industry',
                    'score' => $vertical_base,
                    'colour' => '#9E3D91'
                ];
            }
            if ($comparisons->count()==2 && $comparisons->contains('country')) {
                $values[] = [
                    'label' => 'Geographic Region',
                    'score' => $geographic_base,
                    'colour' => '#9E3D91'
                ];
                $values[] = [
                    'label' => 'Industry',
                    'score' => $vertical_base,
                    'colour' => '#9E3D91'
                ];
                $graphHeight = 270;
                $graphbg = 'comparisonbg_industry_geography'.session('locale');
            }
            if ($comparisons->count()==2 && $comparisons->contains('company')) {
                $values[] = [
                    'label' => 'Organization Size',
                    'score' => $organisation_base,
                    'colour' => '#9E3D91'
                ];
                $values[] = [
                    'label' => 'Industry',
                    'score' => $vertical_base,
                    'colour' => '#9E3D91'
                ];
                $graphHeight = 270;
                $graphbg = 'comparisonbg_industry_company'.session('locale');
            }
            if ($comparisons->count()==1) {
                $values[] = [
                    'label' => 'Industry',
                    'score' => $vertical_base,
                    'colour' => '#9E3D91'
                ];
                $graphHeight = 220;
                $graphbg = 'comparisonbg_industry'.session('locale');
            }

            $values[] = [
                    'label' => 'Peer Overall Cloud Adoption',
                    'score' => $base['baseline'],
                    'colour' => '#9E3D91'
                ];
            $values[] = [
                    'label' => 'Your Overall Cloud Adoption',
                    'score' => $user_score,
                    'colour' => '#1A7ABB'
                ];

            $settings['back_image'] = asset('images/tools/8/'.$graphbg.'.png');
            $settings['back_image_height'] = $graphHeight;

            $graph = new \Goat1000\SVGGraph\SVGGraph(570, $graphHeight, $settings);
            $colours = [['#9E3D91'], ['#1A7ABB']];
            $graph->colours($colours);
            $graph->values($values);
            $graph = $graph->Fetch('HorizontalBarGraph', false);

            $customCopy.= trans(
                session('product.alias').'.overallintro',
                [
                    'image'=>asset('/images/tools/8/graph'.$rating.session('locale').'.png'),
                    'icon'=>asset('/images/tools/8/overallicon.png'),
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.overall'.$rating,
                [
                    'position'=>trans(session('product.alias').'.'.$rating),
                    'stage'=>$overallNumber,
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.overallgraph',
                [
                    'graph'=>$graph,
                ]
            );

            $customCopy.= trans(session('product.alias').'.overalloutro');

            //Infrastructure

            $customCopy.= trans(
                session('product.alias').'.infrastructureintro',
                [
                    'icon'=>asset('/images/tools/8/infrastructureicon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.infrastructure-'.$infrastructureNumber.'-'.$rating);

            //infrastructure graph
            $settings['bar_space'] = 10;
            $settings['back_image'] = asset('images/tools/8/comparison_infrastructure'.session('locale').'.png');
            $settings['back_image_height'] = 138;
            $settings['axis_max_h'] = 30;

            $graphinfrastructure = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.infrastructure');

            $user_score = session('result.infrastructure.score');
            switch (session('result.infrastructure.rating')) {
                case 'stage1':
                    $user_score = (($user_score - 3)*10)/6;
                    break;
                case 'stage2':
                    $user_score = ((($user_score - 9)*10)/3)+10;
                    break;
                case 'stage3':
                    $user_score = ((($user_score - 11)*10)/4)+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

             $values = [
                [
                    'label' => 'Infrastructure Performance',
                    'score' => $base['baseline'],
                    'colour' => '#9E3D91'
                ],
                [
                    'label' => 'User Infrastructure Performance',
                    'score' => $user_score,
                    'colour' => '#1A7ABB'
                ],
             ];

             $graphinfrastructure->colours($colours);
             $graphinfrastructure->values($values);
             $graphinfrastructure = $graphinfrastructure->Fetch('HorizontalGroupedBarGraph', false);
             $customCopy.= trans(
                 session('product.alias').'.infrastructuregraph',
                 [
                    'graph' => $graphinfrastructure,
                 ]
             );

            
            $q2score = $this->getQuestionScoreNew(2, 'infrastructure', 2);
            $customCopy.= trans(session('product.alias').'.infrastructure-'.$overallNumber.'-q2-'.$q2score);

            $q3score = $this->getQuestionScoreNew(3, 'infrastructure', 3);
            $customCopy.= trans(session('product.alias').'.infrastructure-'.$overallNumber.'-q3-'.$q3score);

            $customCopy.= '<div class="pb"></div>';

            //Intelligence
            $customCopy.= trans(
                session('product.alias').'.intelligenceintro',
                [
                    'icon'=>asset('/images/tools/8/intelligenceicon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.intelligence-'.$intelligenceNumber.'-'.$rating);

            //intelligence graph
            $settings['back_image'] = asset('images/tools/8/comparison_intelligence'.session('locale').'.png');
            $settings['back_image_height'] = 138;
            $settings['axis_max_h'] = 30;

            $graphintelligence = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.intelligence');

            $user_score = session('result.intelligence.score');
            switch (session('result.intelligence.rating')) {
                case 'stage1':
                    $user_score = (($user_score - 3)*10)/6;
                    break;
                case 'stage2':
                    $user_score = ((($user_score - 9)*10)/3)+10;
                    break;
                case 'stage3':
                    $user_score = ((($user_score - 11)*10)/4)+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

            $values = [
                [
                    'label' => 'Intelligence Performance',
                    'score' => $base['baseline'],
                    'colour' => '#9E3D91'
                ],
                [
                    'label' => 'User Intelligence Performance',
                    'score' => $user_score,
                    'colour' => '#1A7ABB'
                ],
             ];

            $graphintelligence->colours($colours);
            $graphintelligence->values($values);
            $graphintelligence = $graphintelligence->Fetch('HorizontalGroupedBarGraph', false);
            $customCopy.= trans(
                session('product.alias').'.intelligencegraph',
                [
                    'graph' => $graphintelligence,
                ]
            );
            
            $q5score = $this->getQuestionScoreNew(5, 'intelligence', 2);
            $customCopy.= trans(session('product.alias').'.intelligence-'.$overallNumber.'-q5-'.$q5score);

            $q6score = $this->getQuestionScoreNew(6, 'intelligence', 3);
            $customCopy.= trans(session('product.alias').'.intelligence-'.$overallNumber.'-q6-'.$q6score);

            $customCopy.= '<div class="pb"></div>';

            //Operations
            $customCopy.= trans(
                session('product.alias').'.operationsintro',
                [
                    'icon'=>asset('/images/tools/8/operationsicon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.operations-'.$operationsNumber.'-'.$rating);

            //operations graph
            $settings['back_image'] = asset('images/tools/8/comparison_operations'.session('locale').'.png');
            $settings['back_image_height'] = 138;
            $settings['axis_max_h'] = 30;

            $graphoperations = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.operations');

            $user_score = session('result.operations.score');
            switch (session('result.operations.rating')) {
                case 'stage1':
                    $user_score = (($user_score - 3)*10)/6;
                    break;
                case 'stage2':
                    $user_score = ((($user_score - 9)*10)/3)+10;
                    break;
                case 'stage3':
                    $user_score = ((($user_score - 11)*10)/4)+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

            $values = [
                [
                    'label' => 'Operations Performance',
                    'score' => $base['baseline'],
                    'colour' => '#9E3D91'
                ],
                [
                    'label' => 'User Operations Performance',
                    'score' => $user_score,
                    'colour' => '#1A7ABB'
                ],
             ];

            $graphoperations->colours($colours);
            $graphoperations->values($values);
            $graphoperations = $graphoperations->Fetch('HorizontalGroupedBarGraph', false);
            $customCopy.= trans(
                session('product.alias').'.operationsgraph',
                [
                    'graph' => $graphoperations,
                ]
            );
            
            $q8score = $this->getQuestionScoreNew(8, 'operations', 2);
            $customCopy.= trans(session('product.alias').'.operations-'.$overallNumber.'-q8-'.$q8score);

            $q9score = $this->getQuestionScoreNew(9, 'operations', 3);
            $customCopy.= trans(session('product.alias').'.operations-'.$overallNumber.'-q9-'.$q9score);

            $customCopy.= '<div class="pb"></div>';

            //Conclusion
            $customCopy.= trans(
                session('product.alias').'.conclusionintro',
                [
                    'icon'=>asset('/images/tools/8/conclusionicon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.guidance');
            if ($q3score == 1 || $q3score == 2) {
                $customCopy.= trans(session('product.alias').'.guidance-q3-1-2');
            }
            if ($q3score == 3 || $q3score == 4) {
                $customCopy.= trans(session('product.alias').'.guidance-q3-3-4');
            }
            if ($q3score == 5) {
                $customCopy.= trans(session('product.alias').'.guidance-q3-5');
            }

            $customCopy.= '<div class="spacer"></div>';

            $vars['sectionCopy'] = $customCopy;
        } elseif (session('product.id')==9) {
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $infrastructureNumber =  (int) filter_var(session('result.infrastructure.rating'), FILTER_SANITIZE_NUMBER_INT);
            $intelligenceNumber =  (int) filter_var(session('result.intelligence.rating'), FILTER_SANITIZE_NUMBER_INT);
            $operationsNumber =  (int) filter_var(session('result.operations.rating'), FILTER_SANITIZE_NUMBER_INT);

            $vars['introduction1'] = trans(
                session('product.alias').'.introduction1',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating'))
                ]
            );
            $vars['introduction2'] = trans(
                session('product.alias').'.introduction2',
                [
                    'url'=>session('url')
                ]
            );
            $vars['introduction3'] = trans(session('product.alias').'.introduction3');
            $vars['introduction4'] = trans(session('product.alias').'.introduction4');
            $vars['introduction5'] = trans(session('product.alias').'.introduction5');
            $vars['introduction6'] = trans(session('product.alias').'.introduction6');
            $vars['introduction7'] = trans(session('product.alias').'.introduction7');
            $vars['introduction8'] = trans(
                session('product.alias').'.introduction8',
                [
                    'url'=>session('url')
                ]
            );

            $customCopy = '';

            //overall
            $rating = session('result.overall.rating');
            $vars['overall'] = trans(
                session('product.alias').'.overall'.$rating,
                [
                    'stage'=>trans(session('product.alias').'.'.$rating)
                ]
            );

            //Sales
            $rating = session('result.sales.rating');
            $vars['sales'] = trans(
                session('product.alias').'.sales'.$rating,
                [
                    'stage'=>trans(session('product.alias').'.'.$rating),
                    'url'=>session('url')
                ]
            );

            //Marketing
            $rating = session('result.marketing.rating');
            $vars['marketing'] = trans(
                session('product.alias').'.marketing'.$rating,
                [
                    'stage'=>trans(session('product.alias').'.'.$rating),
                    'url'=>session('url')
                ]
            );
            
            //Services
            $rating = session('result.services.rating');
            $vars['services'] = trans(
                session('product.alias').'.services'.$rating,
                [
                    'stage'=>trans(session('product.alias').'.'.$rating),
                    'url'=>session('url')
                ]
            );

            //Security
            $rating = session('result.security.rating');
            $vars['security'] = trans(
                session('product.alias').'.security'.$rating,
                [
                    'stage'=>trans(session('product.alias').'.'.$rating),
                    'url'=>session('url')
                ]
            );

            $customCopy.= '<div class="spacer"></div>';

            $vars['sectionCopy'] = $customCopy;
        } elseif (session('product.id')==10) {
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');
            $score = session('result.overall.score');
            $subtractStages = 0;
            if($rating == 'stage2'){
                $subtractStages = config('baseline_'.session('product.id').'.overall.types.stage1.high');
            }
            if($rating == 'stage3'){
                $subtractStages = config('baseline_'.session('product.id').'.overall.types.stage1.high') + config('baseline_'.session('product.id').'.overall.types.stage2.high');
            }
            $score = $score-$subtractStages;
            $range = config('baseline_'.session('product.id').'.overall.types.'.session('result.overall.rating'));
            $band = $range['high'] - $range['low'];
            $scorePercentage = ($score/$band)*100;
            $scoreMove = 0;
            if($scorePercentage <= 12.5){
                $scoreMove = 7;
            }
            if($scorePercentage > 12.5 && $scorePercentage <= 25){
                $scoreMove = 6;
            }
            if($scorePercentage > 25 && $scorePercentage <= 37.5){
                $scoreMove = 5;
            }
            if($scorePercentage > 37.5 && $scorePercentage <= 50){
                $scoreMove = 4;
            }
            if($scorePercentage > 50 && $scorePercentage <= 62.5){
                $scoreMove = 3;
            }
            if($scorePercentage > 62.5 && $scorePercentage <= 75){
                $scoreMove = 2;
            }
            if($scorePercentage > 75 && $scorePercentage <= 100){
                $scoreMove = 1;
            }
            $halfMove = 0;


            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $dxAdoptionNumber =  (int) filter_var(session('result.dx-adoption.rating'), FILTER_SANITIZE_NUMBER_INT);
            $successInDxNumber =  (int) filter_var(session('result.success-in-dx.rating'), FILTER_SANITIZE_NUMBER_INT);
            $connectedFinancialServicesNumber =  (int) filter_var(session('result.connected-financial-services.rating'), FILTER_SANITIZE_NUMBER_INT);

            $verticals = collect([
                'banking',
                'insurance',
                'capital-markets',
                'other-fsi'
            ]);
            $vertical_block = $base['block-vertical-'.$verticals[$verticals->search(strtolower(session('user.extra.industry')))].'-'.$overallNumber];

            $orgsizes = collect([
                '100-499',
                '500-999',
                '1000-4999',
                '5000-9999',
                '10000+'
            ]);
            $organisation_block = $base['block-size-'.$orgsizes[$orgsizes->search(strtolower(session('user.extra.employees')))].'-'.$overallNumber];

            $countries = collect([
                'us'=>[
                    'United States'
                ],
                'uk'=>[
                    'United Kingdom',
                ],
                'de'=>[
                    'Germany'
                ],
                'it'=>[
                    'Italy'
                ],
                'sp'=>[
                    'Spain'
                ],
                'jp'=>[
                    'Japan',
                ],
                'mx'=>[
                    'Mexico'
                ],
                'ar'=>[
                    'Argentina'
                ],
                'br'=>[
                    'Brazil'
                ],
                'cl'=>[
                    'Chile',
                ],
                'co'=>[
                    'Columbia'
                ]
            ]);

            $userCountryCode = '';
            $isFromBaselineRegion = $countries->search(function($item, $key) use(&$userCountryCode){
                if(collect($item)->search(session('user.country')) !== false){
                    $userCountryCode = $key;
                    return true;
                }
                return false;
            });

            $nttdataGraphSettings = [
                'use_iconv'=> false,
                'title' => 'Overall Rating',
                'back_colour' => 'transparent',
                'stroke_colour' => NULL,
                'back_stroke_width' => 0,
                'back_stroke_colour' => 'transparent',
                'axis_colour' => '#FFF',
                'axis_text_colour' => '#333',
                'axis_stroke_width' => 0,
                'axis_overlap' => 2,
                'axis_font' => 'sans-serif',
                'axis_font_size' => 14,
                'axis_font_size_h' => 10,
                'show_divisions' => 0,
                'show_grid_h' => 0,
                'show_grid_v' => 1,
                'grid_left' => 180,
                'grid_colour' => '#c6c6c6',
                'label_colour' => '#000',
                'label_colour' => '#000',
                'pad_top' => 20,
                'pad_right' => 20,
                'pad_left' => 0,
                'pad_bottom' => 0,
                // 'legend_entries' => [
                //     'DX Complacent', 'DX Conformist', 'DX Trailblazer'
                // ],
                'legend_position' => 'outer right 0 45',
                'legend_stroke_width' => 0,

                'minimum_grid_spacing' => 20,
                'grid_division_h' => 10,
                'axis_max_h' => 100,

                'axis_text_space' => 10,
                'show_data_labels' => false,
                'data_label_type' => 'plain',
                'data_label_position' => 'top',
            ];

            $colours = [
                '#D0DCE6',
                '#7296B4',
                '#145081',
            ];

            $overallValues = collect(config('baseline_'.session('product.id').'.overall.baseline-overall'))->map(function($item, $key){
                return [
                    'Overall Performance' => $item
                ];
            });

            $toNow = 0;
            $subtract = 0;
            $overallValues->each(function($item,$key) use(&$toNow, &$subtract,$scoreMove,&$halfMove){
                $toNow += $item['Overall Performance'];
                if($key == session('result.overall.rating')){
                    $subtract = ($item['Overall Performance']/8)*$scoreMove;
                    $halfMove = ($item['Overall Performance']/2);
                    return false;
                }
            });
            $shapVal = $toNow-$subtract;

            $nttdataGraphSettings['shape'] = [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g0.5',
                    'x2' => 'g'.$shapVal,
                    'y2' => 'g0.5',
                    'stroke-width' => 2,
                    'stroke' => '#e6b600',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$shapVal,
                    'cy' => 'g0.5',
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e6b600'
                ]
            ];

            $labelToNow = 0;
            $nttdataGraphSettings['label'] = $overallValues->map(function($item,$key) use(&$labelToNow,$scoreMove,&$halfMove){
                $labelToNow += $item['Overall Performance'];
                $subtract = ($item['Overall Performance']/8)*$scoreMove;
                $halfMove = ($item['Overall Performance']/2);
                $val = $labelToNow - $halfMove;
                return [
                    'g'.$val,
                    'g1',
                    trans(session('product.alias').'.'.$key),
                    'position' => 'outside top',
                    'font_size' => 12,
                    'colour' => '#606060',
                ];
            })->values()->toArray();
            


            $overallGraph = new \Goat1000\SVGGraph\SVGGraph(650, 90, $nttdataGraphSettings);
            $overallGraph->colours($colours);
            $overallGraph->values($overallValues->toArray());

            $nttdataGraphSettings['legend_entries'] = null;

            //Country Graph
            if($isFromBaselineRegion!==false){
                $country = session('user.country');
                $countryValues = collect(config('baseline_'.session('product.id').'.overall.baseline-country-'.$userCountryCode))->map(function($item, $key) use($country){
                    return [
                        'Performance by country ('.$country.')' => $item
                    ];
                });

                $toNow = 0;
                $subtract = 0;
                $countryValues->each(function($item,$key) use(&$toNow, &$subtract, $country,$scoreMove,&$halfMove){
                    $toNow += $item['Performance by country ('.$country.')'];
                    if($key == session('result.overall.rating')){
                        $subtract = ($item['Performance by country ('.$country.')']/8)*$scoreMove;
                        $halfMove = ($item['Performance by country ('.$country.')']/2);
                        return false;
                    }
                });
                $shapVal = $toNow-$subtract;

                $nttdataGraphSettings['shape'] = [
                    [
                        'line',
                        'x1' => 'g0',
                        'y1' => 'g0.5',
                        'x2' => 'g'.$shapVal,
                        'y2' => 'g0.5',
                        'stroke-width' => 2,
                        'stroke' => '#e6b600',
                        'depth' => 'above',
                    ],
                    [
                        'circle',
                        'cx' => 'g'.$shapVal,
                        'cy' => 'g0.5',
                        'r' => 10,
                        'stroke' => '#FFF',
                        'stroke-width' => 2,
                        'depth' => 'above',
                        'fill' => '#e6b600'
                    ]
                ];

                $labelToNow = 0;
                $nttdataGraphSettings['label'] = $countryValues->map(function($item,$key) use(&$labelToNow, $country,$scoreMove,&$halfMove){
                    $labelToNow += $item['Performance by country ('.$country.')'];
                    $subtract = ($item['Performance by country ('.$country.')']/8)*$scoreMove;
                    $halfMove = ($item['Performance by country ('.$country.')']/2);
                    $val = $labelToNow - $halfMove;
                    return [
                        'g'.$val,
                        'g1',
                        trans(session('product.alias').'.'.$key),
                        'position' => 'outside top',
                        'font_size' => 12,
                        'colour' => '#606060',
                    ];
                })->values()->toArray();
                


                $countryGraph = new \Goat1000\SVGGraph\SVGGraph(650, 90, $nttdataGraphSettings);
                $countryGraph->colours($colours);
                //$countryGraph->values($countryValues->toArray());
                $countryGraph->values($countryValues->map(function($item, $key){
                    return collect($item)->mapWithKeys(function($item, $key){
                        return [wordwrap($key, 20, "\n", false) => $item];
                    });
                })->toArray());             
            }
            //Industry Graph
            $userIndustry = session('user.extra.industry');
            $industryValues = collect(config('baseline_'.session('product.id').'.overall.baseline-'.$userIndustry))->map(function($item, $key) use($userIndustry){
                return [
                    'Performance by Industry ('.ucfirst($userIndustry).')' => $item
                ];
            });

            $toNow = 0;
            $subtract = 0;
            $industryValues->each(function($item,$key) use(&$toNow, &$subtract, $userIndustry,$scoreMove,&$halfMove){
                $toNow += $item['Performance by Industry ('.ucfirst($userIndustry).')'];
                if($key == session('result.overall.rating')){
                    $subtract = ($item['Performance by Industry ('.ucfirst($userIndustry).')']/8)*$scoreMove;
                    $halfMove = ($item['Performance by Industry ('.ucfirst($userIndustry).')']/2);
                    return false;
                }
            });
            $shapVal = $toNow-$subtract;

            $nttdataGraphSettings['shape'] = [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g0.5',
                    'x2' => 'g'.$shapVal,
                    'y2' => 'g0.5',
                    'stroke-width' => 2,
                    'stroke' => '#e6b600',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$shapVal,
                    'cy' => 'g0.5',
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e6b600'
                ]
            ];

            $labelToNow = 0;
            $nttdataGraphSettings['label'] = $industryValues->map(function($item,$key) use(&$labelToNow, $userIndustry,$scoreMove,&$halfMove){
                $labelToNow += $item['Performance by Industry ('.ucfirst($userIndustry).')'];
                $subtract = ($item['Performance by Industry ('.ucfirst($userIndustry).')']/8)*$scoreMove;
                $halfMove = ($item['Performance by Industry ('.ucfirst($userIndustry).')']/2);
                $val = $labelToNow - $halfMove;
                return [
                    'g'.$val,
                    'g1',
                    trans(session('product.alias').'.'.$key),
                    'position' => 'outside top',
                    'font_size' => 12,
                    'colour' => '#606060',
                ];
            })->values()->toArray();
            


            $industryGraph = new \Goat1000\SVGGraph\SVGGraph(650, 90, $nttdataGraphSettings);
            $industryGraph->colours($colours);
            //$industryGraph->values($industryValues->toArray());
            $industryGraph->values($industryValues->map(function($item, $key){
                return collect($item)->mapWithKeys(function($item, $key){
                    return [wordwrap($key, 20, "\n", false) => $item];
                });
            })->toArray());

            //Company Size Graph
            $userEmployees = session('user.extra.employees');
            $employeeValues = collect(config('baseline_'.session('product.id').'.overall.baseline-'.$userEmployees))->map(function($item, $key) use($userEmployees){
                return [
                    'Performance by Company Size ('.ucfirst($userEmployees).')' => $item
                ];
            });

            $toNow = 0;
            $subtract = 0;
            $employeeValues->each(function($item,$key) use(&$toNow, &$subtract, $userEmployees,$scoreMove,&$halfMove){
                $toNow += $item['Performance by Company Size ('.ucfirst($userEmployees).')'];
                if($key == session('result.overall.rating')){
                    $subtract = ($item['Performance by Company Size ('.ucfirst($userEmployees).')']/8)*$scoreMove;
                    $halfMove = ($item['Performance by Company Size ('.ucfirst($userEmployees).')']/2);
                    return false;
                }
            });
            $shapVal = $toNow-$subtract;

            $nttdataGraphSettings['shape'] = [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g0.5',
                    'x2' => 'g'.$shapVal,
                    'y2' => 'g0.5',
                    'stroke-width' => 2,
                    'stroke' => '#e6b600',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$shapVal,
                    'cy' => 'g0.5',
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e6b600'
                ]
            ];

            $labelToNow = 0;
            $nttdataGraphSettings['label'] = $employeeValues->map(function($item,$key) use(&$labelToNow, $userEmployees,$scoreMove,&$halfMove){
                $labelToNow += $item['Performance by Company Size ('.ucfirst($userEmployees).')'];
                $subtract = ($item['Performance by Company Size ('.ucfirst($userEmployees).')']/8)*$scoreMove;
                $halfMove = ($item['Performance by Company Size ('.ucfirst($userEmployees).')']/2);
                $val = $labelToNow - $halfMove;
                return [
                    'g'.$val,
                    'g1',
                    trans(session('product.alias').'.'.$key),
                    'position' => 'outside top',
                    'font_size' => 12,
                    'colour' => '#606060',
                ];
            })->values()->toArray();
            


            $employeeGraph = new \Goat1000\SVGGraph\SVGGraph(650, 90, $nttdataGraphSettings);
            $employeeGraph->colours($colours);
            //$employeeGraph->values($employeeValues->toArray());
            $employeeGraph->values($employeeValues->map(function($item, $key){
                return collect($item)->mapWithKeys(function($item, $key){
                    return [wordwrap($key, 20, "\n", false) => $item];
                });
            })->toArray());

            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating'))
                ]
            );
            $customCopy = '';

            $overallRating = session('result.overall.rating');

            //overall
            $rating = session('result.overall.rating');
            $vars['overall'] = trans(session('product.alias').'.overall'.$rating);
            $vars['overalloutro'] = trans(session('product.alias').'.overall'.$rating.'outro');
            $vars['overallGraph'] = $overallGraph->fetch('HorizontalStackedBarGraph', false);
            if($isFromBaselineRegion!==false){
                $vars['countryGraph'] = $countryGraph->fetch('HorizontalStackedBarGraph', false);
            }
            $vars['industryGraph'] = $industryGraph->fetch('HorizontalStackedBarGraph', false);
            $vars['employeeGraph'] = $employeeGraph->fetch('HorizontalStackedBarGraph', false);
            if(isset($geographic_block)){

            }

            //DX Adoption
            $dxAdoptionRating = session('result.dx-adoption.rating');
            $vars['dxAdoption'] = trans(session('product.alias').'.dx-adoption'.$overallRating.$dxAdoptionRating);
            
            //Q1
            $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq1intro');
            if ($this->getQuestionScoreNew(1, 'dx-adoption', 1)<=2.5) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq1'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(1, 'dx-adoption', 1) > 2.5 && $this->getQuestionScoreNew(1, 'dx-adoption', 1) <= 3.5) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq1'.$overallRating.'b');
            } else {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq1'.$overallRating.'c');
            }

            //Q2
            $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq2intro');
            if ($this->getQuestionScoreNew(2, 'dx-adoption', 2) == 2) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq2'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(2, 'dx-adoption', 2) == 3) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq2'.$overallRating.'b');
            } else {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq2'.$overallRating.'c');
            }

            //Q3
            $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3intro');
            if (collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == 'none' || collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == '0-9%') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'a');
            } elseif (collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == '10-19%' || collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == '20-29%') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'b');
            } elseif (collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == '30-39%' || collect($this->getAnswerText(3, 'dx-adoption', 3))->first() == '40% and above') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'c');
            } elseif (collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == 'None' || collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == '0-9%') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'c');
            } elseif (collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == '10-19%' || collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == '20-29%') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'c');
            } elseif (collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == '30-39%' || collect($this->getAnswerText(3, 'dx-adoption', 3))->last() == '40% and above') {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq3'.$overallRating.'c');
            }

            //Q4
            $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq4intro');
            if ($this->getQuestionScoreNew(4, 'dx-adoption', 4)<=2.5) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq4'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(4, 'dx-adoption', 4) > 2.5 && $this->getQuestionScoreNew(4, 'dx-adoption', 4) <= 3.5) {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq4'.$overallRating.'b');
            } else {
                $vars['dxAdoption'] .= trans(session('product.alias').'.dx-adoptionq4'.$overallRating.'c');
            }


            //Success in DX
            $successInDxRating = session('result.success-in-dx.rating');
            $vars['successInDx'] = trans(session('product.alias').'.success-in-dx'.$overallRating.$successInDxRating);

            //Q5
            $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5intro');
            if ($this->getQuestionScoreNew(5, 'success-in-dx', 1) == 1) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(5, 'success-in-dx', 1) == 2) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5'.$overallRating.'b');
            } elseif ($this->getQuestionScoreNew(5, 'success-in-dx', 1) == 3) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5'.$overallRating.'c');
            } elseif ($this->getQuestionScoreNew(5, 'success-in-dx', 1) == 4) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5'.$overallRating.'d');
            } else {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq5'.$overallRating.'e');
            }

            //Q6
            $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq6intro');
            $answerText = $this->getAnswerText(6, 'success-in-dx', 2);
            if ($answerText[0] == 'Too early to measure') {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq6'.$overallRating.'a');
            } elseif ($answerText[0] == 'Not very successful') {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq6'.$overallRating.'b');
            } elseif ($answerText[0] == 'Somewhat successful') {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq6'.$overallRating.'c');
            } elseif ($answerText[0] == 'Successful in all initiatives so far') {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq6'.$overallRating.'d');
            }

            //Q7
            $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq7intro');
            if ($this->getQuestionScoreNew(7, 'success-in-dx', 3)<=2.5) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq7'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(7, 'success-in-dx', 3) > 2.5 && $this->getQuestionScoreNew(7, 'success-in-dx', 3) <= 3.5) {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq7'.$overallRating.'b');
            } else {
                $vars['successInDx'] .= trans(session('product.alias').'.success-in-dxq7'.$overallRating.'c');
            }
            
            //connected-financial-services
            $connectedFinancialServicesRating = session('result.connected-financial-services.rating');
            $vars['connectedFinancialServices'] = trans(session('product.alias').'.connected-financial-services'.$overallRating.$connectedFinancialServicesRating);

            //Q8
            $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8intro');
            if ($this->getQuestionScoreNew(8, 'connected-financial-services', 1) == 1) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(8, 'connected-financial-services', 1) == 2) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8'.$overallRating.'b');
            } elseif ($this->getQuestionScoreNew(8, 'connected-financial-services', 1) == 3) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8'.$overallRating.'c');
            } elseif ($this->getQuestionScoreNew(8, 'connected-financial-services', 1) == 4) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8'.$overallRating.'d');
            } else {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq8'.$overallRating.'e');
            }

            //Q9
            $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq9intro');
            if ($this->getQuestionScoreNew(9, 'connected-financial-services', 2)<=2.5) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq9'.$overallRating.'a');
            } elseif ($this->getQuestionScoreNew(9, 'connected-financial-services', 2) > 2.5 && $this->getQuestionScoreNew(9, 'connected-financial-services', 2) <= 3.5) {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq9'.$overallRating.'b');
            } else {
                $vars['connectedFinancialServices'] .= trans(session('product.alias').'.connected-financial-servicesq9'.$overallRating.'c');
            }

            $customCopy.= '<div class="spacer"></div>';

            $vars['sectionCopy'] = $customCopy;
        } elseif(session('product.id')==12) { //Dassault
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $businessNumber =  (int) filter_var(session('result.digital-business.rating'), FILTER_SANITIZE_NUMBER_INT);
            $designNumber =  (int) filter_var(session('result.digital-design.rating'), FILTER_SANITIZE_NUMBER_INT);
            $deliveryNumber =  (int) filter_var(session('result.digital-delivery.rating'), FILTER_SANITIZE_NUMBER_INT);
            

            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'rankimg'=>asset('images/tools/12/ranking_'.$overallNumber.session('locale').'.png'),
                ]
            );

            $customCopy = '';

            //overall
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');
            $settings = [
                'use_iconv'=> false,
                'back_image'=>asset('images/tools/12/comparison_overall'.session('locale').'.png?id=1'),
                'back_image_width'=> 570,
                'back_image_height'=> 138,
                'pad_top'=>45,
                'pad_right'=>0,
                'pad_bottom'=>23,
                'pad_left'=>114,
                'back_colour' => 'none',
                'stroke_colour' => 'none',
                'back_stroke_width' => 0, 'back_stroke_colour' => 'none',
                'show_axes' => false,
                'axis_max_h' => 30,
                'axis_min_h' => 0,
                'axis_stroke_width' => 1,
                'axis_colour' => '#efefef',
                'axis_text_colour' => '#999',
                'axis_overlap' => 2,
                
                'axis_font_size' => 12,
                'bar_space' => 20,
                'group_space' => 1,
                'grid_colour' => 'none',
                'show_data_labels' => false,
                'data_label_colour' => 'white',
                'data_label_font_size' => 14,
                'data_label_outline_thickness' => 1,
                'data_label_back_colour' => 'rgba(0,0,0,0.2)',
                'data_label_space' => '6',
                'label_colour' => '#000',

                'link_base' => '/',
                'link_target' => '_top',
                'minimum_grid_spacing' => 20,
                'structured_data' => true,
                'structure' => [
                    'key' => 'label',
                    'value' => 'score',
                    'colour' => 'colour'
                ]
            ];

            //Mean Calculation for user
            $user_score = session('result.overall.score');

            $user_score = 0;
            $actual_score = session('result.overall.score');
            switch (session('result.overall.rating')) {
                case 'stage1':
                    $user_score = ($actual_score-11) * 10/13.99;
                    break;
                case 'stage2':
                    $user_score = (($actual_score-25 ) * 10/4.29)+10;
                    break;
                case 'stage3':
                    $user_score = (($actual_score-29.3) * 10/20.7)+20;
                    break;
            }

            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }
            
            $values[] = [
                'label' => 'Your Overall Cloud Adoption',
                'score' => $user_score,
                'colour' => '#132E44'
            ];

            $graph = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $colours = [['#A2BBCF'], ['#132E44']];
            $graph->colours($colours);
            $graph->values($values);
            $graph = $graph->Fetch('HorizontalBarGraph', false);

            $customCopy.= trans(
                session('product.alias').'.overallintro',
                [
                    'image'=>asset('/images/tools/12/graph'.$rating.session('locale').'.png'),
                    'icon'=>asset('/images/tools/12/overall_icon.png'),
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.overallgraph',
                [
                    'graph'=>$graph,
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.overall'.$rating,
                [
                    'position'=>trans(session('product.alias').'.'.$rating),
                    'stage'=>$overallNumber,
                ]
            );

            $settings = [
                'use_iconv'=> false,
                'back_image' => null,
                'pad_top'=> null,
                'pad_right'=> null,
                'pad_bottom'=> 40,
                'pad_left'=> null,
                'back_colour' => 'transparent',
                'stroke_colour' => '#ccc',
                'back_stroke_width' => 0, 'back_stroke_colour' => 'transparent',
                'show_axes' => true,
                'axis_max_h' => 100,
                'axis_min_h' => 0,
                'axis_stroke_width' => 0.5,
                'axis_colour' => '#efefef',
                'axis_text_colour' => '#000',
                'axis_overlap' => 2,
                'axis_font' => 'Frutiger Neue LT W1G', 'axis_font_size' => 13,
                'bar_space' => 20,
                'group_space' => 0,
                'grid_colour' => 'transparent',
                'show_axis_text_h' => false,
                'grid_left' => 114,
                'grid_division_h' => 10,
                'show_data_labels' => true,
                'data_label_colour' => 'black',
                'data_label_font_size' => 14,
                'data_label_outline_thickness' => 0,
                'data_label_back_colour' => 'transparent',
                'data_label_space' => '6',
                'label_colour' => '#000',
                'units_label' => '%',
                'data_label_position' => 'bottom center',
                'legend_entries' => [
                    'Digital Improver',
                    'Digital Achiever',
                    'Digital Native',
                ],
                'legend_position' => 'outer bottom right',
                'legend_columns' => 3,
                'legend_stroke_width' => 0,
                'legend_shadow_opacity' => 0,

                'link_base' => '/',
                'link_target' => '_top',
                'minimum_grid_spacing' => 10,
                'structured_data' => true,
                'structure' => [
                    'key' => 'label',
                    'value' => ['stage1','stage2','stage3'],
                    'colour' => ['colour1','colour2','colour3']
                ],
            ];

            $comparisons = [];
            $vertical_base = $base['baseline'];
            $verticals = [
                'fsi' => 'Banking/insurance/financial services',
                'manufacturing' => 'Manufacturing',
                'retail-wholesale' => 'Retail/wholesale',
                'communication' => 'Communication',
                'media' => 'Media (TV, radio, press)',
                'utilities' => 'Utilities',
                'transportation' => 'Transportation',
                'construction' => 'Construction',
                'personal-services-leisure' => 'Personal services/leisure',
                'professional-services' => 'Professional services (real estate, accountancy, advertising, business consultancy, recruitment, etc.)',
                'it-telecom-service-providers' => 'IT/telecom service providers',
                'education' => 'Education',
                'healthcare' => 'Healthcare',
            ];
            if (collect($verticals)->contains(session('user.extra.industry','Personal services/leisure'))) {
                $comparisons[] = 'industry';
                $vertical_base = $base['benchmark-vertical-'.array_search(session('user.extra.industry','Personal services/leisure'), $verticals)];
            }

            $organisation_base = $base['baseline'];
            $orgsizes = [
                '1' => '1',
                '2-to-9' => '2 to 9',
                '10-to-49' => '10 to 49',
                '50-to-99' => '50 to 99',
                '100-to-249' => '100 to 249',
                '250-to-499' => '250 to 499',
                '500-to-999' => '500 to 999',
                '1000-or-more' => '1000 or more',
            ];
            if (collect($orgsizes)->contains(session('user.extra.company_size','100 to 249'))) {
                $comparisons[] = 'company';
                $organisation_base = $base['benchmark-size-'.array_search(session('user.extra.company_size','100 to 249'), $orgsizes)];
            }

            $geographic_base = $base['baseline'];
            $countries = ['en'=>'United Kingdom','fr'=>'France','de'=>'Germany'];
            if (collect($countries)->contains(session('user.country', 'United Kingdom'))) {
                $comparisons[] = 'country';
                $geographic_base = $base['benchmark-country-'.array_search(session('user.country', 'United Kingdom'), $countries)];
            }
            $comparisons = collect($comparisons);

            $values = [];
            $comparisons->each(function($item) use(&$values, &$graphHeight, $vertical_base, $organisation_base, $geographic_base){
                switch ($item) {
                    case 'industry':
                        $values[] = [
                            'label' => 'Industry',
                            'stage1' => ceil($vertical_base[0] / (collect($vertical_base)->sum()/100)),
                            'stage2' => ceil($vertical_base[1] / (collect($vertical_base)->sum()/100)),
                            'stage3' => ceil($vertical_base[2] / (collect($vertical_base)->sum()/100)),
                            'colour1' => 'rgba(17,85,130,0.3)',
                            'colour2' => 'rgba(17,85,130,0.5)',
                            'colour3' => 'rgba(17,85,130,0.8)',
                        ];
                        
                        break;
                    case 'company':
                        $values[] = [
                            'label' => "Organization Size",
                            'stage1' => ceil($organisation_base[0] / (collect($organisation_base)->sum()/100)),
                            'stage2' => ceil($organisation_base[1] / (collect($organisation_base)->sum()/100)),
                            'stage3' => ceil($organisation_base[2] / (collect($organisation_base)->sum()/100)),
                            'colour1' => 'rgba(17,85,130,0.3)',
                            'colour2' => 'rgba(17,85,130,0.5)',
                            'colour3' => 'rgba(17,85,130,0.8)',
                        ];
                        break;
                    case 'country':
                        $values[] = [
                            'label' => "Country",
                            'stage1' => ceil($geographic_base[0] / (collect($geographic_base)->sum()/100)),
                            'stage2' => ceil($geographic_base[1] / (collect($geographic_base)->sum()/100)),
                            'stage3' => ceil($geographic_base[2] / (collect($geographic_base)->sum()/100)),
                            'colour1' => 'rgba(17,85,130,0.3)',
                            'colour2' => 'rgba(17,85,130,0.5)',
                            'colour3' => 'rgba(17,85,130,0.8)',
                        ];
                        break;
                }
            });


            // $values[] = [
            //     'label' => 'Peer Overall Cloud Adoption',
            //     'score' => $base['baseline'],
            //     'colour' => '#A2BBCF'
            // ];

            //$settings['back_image'] = asset('images/tools/12/'.$graphbg.'.png');
            //$settings['back_image_height'] = $graphHeight;
            // $values = [
            //     [
            //         'label' => "Vertical Comparison",
            //         'stage1' => 30,
            //         'stage2' => 30,
            //         'stage3' => 30,
            //         'colour1' => '#A2BBCF',
            //         'colour2' => 'green',
            //         'colour3' => 'red',
            //     ],
            //     [
            //         'label' => "Company Size Comparison",
            //         'stage1' => 30,
            //         'stage2' => 30,
            //         'stage3' => 30,
            //         'colour1' => '#A2BBCF',
            //         'colour2' => 'green',
            //         'colour3' => 'red',
            //     ],
            //     [
            //         'label' => "Industry Comparison",
            //         'stage1' => 30,
            //         'stage2' => 30,
            //         'stage3' => 30,
            //         'colour1' => '#A2BBCF',
            //         'colour2' => 'green',
            //         'colour3' => 'red',
            //     ],
            // ];
            foreach ($values as $key => $value) {
                $rating = session('result.overall.rating');
                if($rating == 'stage1'){
                    $x = $value['stage1'] / 2;
                }
                if($rating == 'stage2'){
                    $x = $value['stage1'] + ($value['stage2'] / 2);
                }
                if($rating == 'stage3'){
                    $x = $value['stage1'] + $value['stage2'] + ($value['stage3'] / 2);
                }
                $y = $key == 0 ? 0.6 : $key+1 - 0.4;
                $settings['shape'][] = [
                    'circle',
                    'cx' => 'g'.$x,
                    'cy' => 'g'.$y,
                    'depth' => 'above',
                    'r' => 10,
                    'stroke-width' => 2,
                    'stroke' => '#fff',
                    'fill' => '#142E43'
                ];
            }
            
            $graph = new \Goat1000\SVGGraph\SVGGraph(570, $comparisons->count()*100, $settings);
            $colours = [['#A2BBCF'], ['#132E44']];
            $graph->colours($colours);
            $graph->values($values);

            $graph = $graph->Fetch('HorizontalStackedBarGraph', false);

            $customCopy.= trans(
                session('product.alias').'.comparisongraph',
                [
                    'graph'=>$graph,
                ]
            );

            $customCopy.= trans(session('product.alias').'.overalloutro'.$rating);

            //Digital Business

            $customCopy.= trans(
                session('product.alias').'.digital-business-intro',
                [
                    'icon'=>asset('/images/tools/12/digital_business_icon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.digital-business-'.$businessNumber.'-'.$rating);

            //Digital Business graph
            $settings = [
                'pad_top'=>45,
                'pad_right'=>0,
                'pad_bottom'=>23,
                'pad_left'=>114,
                'back_colour' => 'none',
                'stroke_colour' => 'none',
                'back_stroke_width' => 0, 'back_stroke_colour' => 'none',
                'show_axes' => false,
                'axis_max_h' => 30,
                'axis_min_h' => 0,
                'axis_stroke_width' => 1,
                'axis_colour' => '#efefef',
                'axis_text_colour' => '#999',
                'axis_overlap' => 2,
                
                'axis_font_size' => 12,
                'group_space' => 1,
                'grid_colour' => 'none',
                'show_data_labels' => false,
                'data_label_colour' => 'white',
                'data_label_font_size' => 14,
                'data_label_outline_thickness' => 1,
                'data_label_back_colour' => 'rgba(0,0,0,0.2)',
                'data_label_space' => '6',
                'label_colour' => '#000',

                'link_base' => '/',
                'link_target' => '_top',
                'minimum_grid_spacing' => 20,
                'structured_data' => true,
                'structure' => [
                    'key' => 'label',
                    'value' => 'score',
                    'colour' => 'colour'
                ]
            ];
            $settings['bar_space'] = 20;
            $settings['back_image'] = asset('images/tools/12/comparison_business'.session('locale').'.png');
            $settings['back_image_height'] = 138;

            $graphbusiness = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.digital-business');

            $user_score = session('result.digital-business.score');
          
            switch (session('result.digital-business.rating')) {
                case 'stage1':
                    $user_score = ($user_score-4) * (10/5.49);
                    break;
                case 'stage2': 
                    $user_score = (($user_score-9.5) * (10/2.49))+10;
                    break;
                case 'stage3':
                    $user_score = (($user_score-12) * (10/8))+20;
                    break;
            }

            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

             $values = [
                [
                    'label' => 'Infrastructure Performance',
                    'score' => $user_score,
                    'colour' => '#132E44'
                ]
             ];

             $graphbusiness->colours($colours);
             $graphbusiness->values($values);
             $graphbusiness = $graphbusiness->Fetch('HorizontalBarGraph', false);
             $customCopy.= trans(
                 session('product.alias').'.digital-businessgraph',
                 [
                    'graph' => $graphbusiness,
                 ]
             );

            $customCopy.= trans(session('product.alias').'.question1');
            $q1score = $this->getQuestionScoreNew(2, 'digital-business', 1);
            $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q1-'.$q1score);

            $customCopy.= trans(session('product.alias').'.question2');
            $q2score = $this->getQuestionScoreNew(3, 'digital-business', 2);
            $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q2-'.$q2score);
            
            $customCopy.= trans(session('product.alias').'.question3');
            $q3score = $this->getQuestionScoreNew(4, 'digital-business', 3);
            if($q3score < 2){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q3-1');
            }elseif($q3score == 2){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q3-2');
            }elseif($q3score == 3){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q3-3');
            }elseif($q3score >= 4){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q3-4');
            }

            $customCopy.= trans(session('product.alias').'.question4');
            $q4score = $this->getQuestionScoreNew(5, 'digital-business', 4);
            if($q4score < 2){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q4-1');
            }elseif($q4score == 2){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q4-2');
            }elseif($q4score == 3){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q4-3');
            }elseif($q4score >= 4){
                $customCopy.= trans(session('product.alias').'.digital-business-'.$overallNumber.'-q4-4');
            }

            $customCopy.= '<div class="pb"></div>';

            //Digital Design
            $customCopy.= trans(
                session('product.alias').'.digital-designintro',
                [
                    'icon'=>asset('/images/tools/12/digital_design_icon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.digital-design-'.$designNumber.'-'.$rating);

            //Digital Design graph
            $settings['back_image'] = asset('images/tools/12/comparison_design'.session('locale').'.png');

            $graphdesign = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.digital-design');

            $user_score = session('result.digital-design.score');
            switch (session('result.digital-design.rating')) {
                case 'stage1':
                    $user_score = ($user_score-3) * (10/6.49);
                    break;
                case 'stage2':
                    $user_score = (($user_score-8) * (10/1.99))+10;
                    break;
                case 'stage3':
                    $user_score = (($user_score-10) * (10/5))+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

            $values = [
                [
                    'label' => 'User Digital Design Performance',
                    'score' => $user_score,
                    'colour' => '#132E44'
                ],
             ];

            $graphdesign->colours($colours);
            $graphdesign->values($values);
            $graphdesign = $graphdesign->Fetch('HorizontalBarGraph', false);
            $customCopy.= trans(
                session('product.alias').'.digital-designgraph',
                [
                    'graph' => $graphdesign,
                ]
            );
            
            $customCopy.= trans(session('product.alias').'.question5');
            $q5score = $this->getQuestionScoreNew(6, 'digital-design', 1);
            $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q5-'.$q5score);

            $customCopy.= trans(session('product.alias').'.question6');
            $q6score = $this->getQuestionScoreNew(7, 'digital-design', 2);
            if($q6score < 2){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q6-1');
            }elseif($q6score >= 2 && $q6score < 3){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q6-2');
            }elseif($q6score >= 3 && $q6score < 4){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q6-3');
            }elseif($q6score >= 4 && $q6score < 5){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q6-4');
            }elseif($q6score >= 5){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q6-5');
            }

            $customCopy.= trans(session('product.alias').'.question7');
            $q7score = $this->getQuestionScoreNew(8, 'digital-design', 3);
            if($q7score < 2){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q7-1');
            }elseif($q7score >= 2 && $q7score < 3){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q7-2');
            }elseif($q7score >= 3 && $q7score < 4){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q7-3');
            }elseif($q7score >= 4){
                $customCopy.= trans(session('product.alias').'.digital-design-'.$overallNumber.'-q7-4');
            }

            $customCopy.= '<div class="pb"></div>';

            //Digital Delivery
            $customCopy.= trans(
                session('product.alias').'.digital-deliveryintro',
                [
                    'icon'=>asset('/images/tools/12/digital_delivery_icon.png')
                ]
            );

            $customCopy.= trans(session('product.alias').'.digital-delivery-'.$deliveryNumber.'-'.$rating);

            //operations graph
            $settings['back_image'] = asset('images/tools/12/comparison_delivery'.session('locale').'.png');
            $settings['back_image_height'] = 138;
            $settings['axis_max_h'] = 30;

            $graphdelivery = new \Goat1000\SVGGraph\SVGGraph(570, 138, $settings);
            $base = config('baseline_'.session('product.id').'.digital-delivery');

            $user_score = session('result.digital-delivery.score');
            switch (session('result.digital-delivery.rating')) {
                case 'stage1':
                    $user_score = ($user_score-4) * (10/3.9);
                    break;
                case 'stage2':
                    $user_score = (($user_score-7.5) * (10/1.49))+10;
                    break;
                case 'stage3':
                    $user_score = (($user_score-9) * (10/6))+20;
                    break;
            }
            if ($user_score<0.5) {
                $user_score = 0.5;
            }
            if ($user_score>9.5 && $user_score<10) {
                $user_score = 9.5;
            }
            if ($user_score>=10 && $user_score<10.5) {
                $user_score = 10.5;
            }
            if ($user_score>19.5 && $user_score<20) {
                $user_score = 19.5;
            }
            if ($user_score>=20 && $user_score<20.5) {
                $user_score = 20.5;
            }

            $values = [
                [
                    'label' => 'User Digital Delivery Performance',
                    'score' => $user_score,
                    'colour' => '#132E44'
                ],
             ];

            $graphdelivery->colours($colours);
            $graphdelivery->values($values);
            $graphdelivery = $graphdelivery->Fetch('HorizontalBarGraph', false);
            $customCopy.= trans(
                session('product.alias').'.digital-deliverygraph',
                [
                    'graph' => $graphdelivery,
                ]
            );
            $customCopy.= trans(session('product.alias').'.question8');
            $q8score = $this->getQuestionScoreNew(9, 'digital-delivery', 1);
            $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q8-'.$q8score);

            $customCopy.= trans(session('product.alias').'.question9');
            $q9score = $this->getQuestionScoreNew(10, 'digital-delivery', 2);

            if($q9score < 2){
                $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q9-1');
            }elseif($q9score == 2){
                $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q9-2');
            }elseif($q9score == 3){
                $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q9-3');
            }elseif($q9score >= 4){
                $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q9-4');
            }

            $customCopy.= trans(session('product.alias').'.question10');
            $q10score = $this->getQuestionScoreNew(11, 'digital-delivery', 3);
            $customCopy.= trans(session('product.alias').'.digital-delivery-'.$overallNumber.'-q10-'.$q10score);

            $customCopy.= '<div class="pb"></div>';

            //Conclusion
            $customCopy.= trans(
                session('product.alias').'.conclusionintro',
                [
                    'icon'=>asset('/images/tools/12/overall_icon.png')
                ]
            );

            // $customCopy.= trans(session('product.alias').'.guidance');
            // if ($q3score == 1 || $q3score == 2) {
            //     $customCopy.= trans(session('product.alias').'.guidance-q3-1-2');
            // }
            // if ($q3score == 3 || $q3score == 4) {
            //     $customCopy.= trans(session('product.alias').'.guidance-q3-3-4');
            // }
            // if ($q3score == 5) {
            //     $customCopy.= trans(session('product.alias').'.guidance-q3-5');
            // }

            $customCopy.= '<div class="spacer"></div>';

            $vars['sectionCopy'] = $customCopy;
        } elseif (session('product.id') == 13) { //Hitachi
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $migrationNumber =  (int) filter_var(session('result.migration.rating'), FILTER_SANITIZE_NUMBER_INT);
            $statusNumber =  (int) filter_var(session('result.status.rating'), FILTER_SANITIZE_NUMBER_INT);
            $valueNumber =  (int) filter_var(session('result.value.rating'), FILTER_SANITIZE_NUMBER_INT);
            

            $vars['introduction'] = trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'rankimg'=>asset('images/tools/13/ranking_'.$overallNumber.session('locale').'.png'),
                ]
            );

            $customCopy = '';

            //overall
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');

            $user_score = session('result.overall.score');

            $customCopy.= trans(
                session('product.alias').'.introduction1'
            );
            $customCopy.= trans(
                session('product.alias').'.introduction4'
            );
            $customCopy.= trans(
                session('product.alias').'.execsum',
                ['img' => asset('/images/tools/13/pyramid.svg')]
            );
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.introduction5'
            );
            $customCopy.= trans(
                session('product.alias').'.introduction6',
                ['img' => asset('/images/tools/13/rankings.svg')]
            );
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.introduction7'
            );
            $customCopy.= trans(
                session('product.alias').'.introduction1-'.$overallNumber
            );
            $customCopy.= trans(
                session('product.alias').'.introduction4-'.$overallNumber
            );
            $customCopy.= trans(
                session('product.alias').'.overallstage'.$overallNumber
            );

            $widths = [
                1 => '21mm',
                2 => '63mm',
                3 => '105mm',
            ];

            $customCopy.= trans(
                session('product.alias').'.overallgraph',
                [
                    'overall'=>$widths[$overallNumber],
                    'migration'=>$widths[$migrationNumber],
                    'status'=>$widths[$statusNumber],
                    'value'=>$widths[$valueNumber],
                    'url'=>asset('/images/tools/13/comparisonbg_overall.svg')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.overalloutrostage'.$overallNumber
            );

            //Migration
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.migration-intro',
                [
                    'icon'=>asset('/images/tools/13/migration_icon.png')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.migration-graph',
                [
                    'overall'=>$widths[$overallNumber],
                    'migration' => $widths[$migrationNumber],
                    'url' => asset('/images/tools/13/comparison_migration.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.migration-'.$overallNumber.'-stage'.$migrationNumber
            );
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question1'
            );

            $q1answer = $this->getAnswerText(1, 'migration', 1);
            if(in_array('Cost savings', $q1answer)){
                $customCopy.= trans(session('product.alias').'.question1-a');
            }elseif(in_array('Automation to achieve IT operational efficiencies, while reducing complexity and freeing up resources', $q1answer)){
                $customCopy.= trans(session('product.alias').'.question1-b');
            }elseif(in_array('Responding to competitive threats and disruption', $q1answer)){
                $customCopy.= trans(session('product.alias').'.question1-c');
            }elseif(in_array('Capitalize on new data-driven revenue streams and innovation', $q1answer)){
                $customCopy.= trans(session('product.alias').'.question1-d');
            }
            
            $customCopy.= trans(
                session('product.alias').'.question2'
            );
            $q2score = $this->getQuestionScoreNew(2, 'migration', 2);
            if($q2score <= 7){
                $customCopy.= trans(session('product.alias').'.question2-'.$overallNumber.'-1');
            }elseif($q2score >= 8 && $q2score <= 14){
                $customCopy.= trans(session('product.alias').'.question2-'.$overallNumber.'-2');
            }else{
                $customCopy.= trans(session('product.alias').'.question2-'.$overallNumber.'-3');
            }

            $customCopy.= trans(
                session('product.alias').'.question3'
            );
            $q3score = $this->getQuestionScoreNew(3, 'migration', 3);
            if($q3score <= 6){
                $customCopy.= trans(session('product.alias').'.question3-'.$overallNumber.'-1');
            }elseif($q3score >= 7 && $q3score <= 12){
                $customCopy.= trans(session('product.alias').'.question3-'.$overallNumber.'-2');
            }else{
                $customCopy.= trans(session('product.alias').'.question3-'.$overallNumber.'-3');
            }

            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question4'
            );
            $q4score = $this->getQuestionScoreNew(4, 'migration', 4);
            if($q4score <= 5){
                $customCopy.= trans(session('product.alias').'.question4-'.$overallNumber.'-1');
            }elseif($q4score >= 6 && $q4score <= 10){
                $customCopy.= trans(session('product.alias').'.question4-'.$overallNumber.'-2');
            }else{
                $customCopy.= trans(session('product.alias').'.question4-'.$overallNumber.'-3');
            }

            //Status
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.status-intro',
                [
                    'icon'=>asset('/images/tools/13/status_icon.png')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.status-graph',
                [
                    'overall'=>$widths[$overallNumber],
                    'status' => $widths[$statusNumber],
                    'url' => asset('/images/tools/13/comparison_status.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.status-'.$overallNumber.'-stage'.$statusNumber
            );

            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question5'
            );
            $q5answer = $this->getAnswerText(5, 'status', 1);
            if(in_array('Traditional on-premise IT', $q5answer)){
                $customCopy.= trans(session('product.alias').'.question5-a');
            }elseif(in_array('Private Cloud', $q5answer)){
                $customCopy.= trans(session('product.alias').'.question5-b');
            }elseif(in_array('Public Cloud', $q5answer)){
                $customCopy.= trans(session('product.alias').'.question5-c');
            }elseif(in_array('Hybrid Cloud', $q5answer)){
                $customCopy.= trans(session('product.alias').'.question5-d');
            }elseif(in_array('Multicloud', $q5answer)){
                $customCopy.= trans(session('product.alias').'.question5-e');
            }

            $customCopy.= trans(
                session('product.alias').'.question6'
            );
            $q6answer = $this->getAnswerText(6, 'status', 2);
            if(in_array('Improve application and IT infrastructure efficiency / performance', $q6answer)){
                $customCopy.= trans(session('product.alias').'.question6-a');
            }elseif(in_array('Use of one or more clouds powers growth initiatives and innovation', $q6answer)){
                $customCopy.= trans(session('product.alias').'.question6-b');
            }elseif(in_array('Manage and reduce technical debt', $q6answer)){
                $customCopy.= trans(session('product.alias').'.question6-c');
            }elseif(in_array('Provide customers, partners and employees with an improved digital experience', $q6answer)){
                $customCopy.= trans(session('product.alias').'.question6-d');
            }elseif(in_array('Maximize the utilization of data and derive faster data-driven insights', $q6answer)){
                $customCopy.= trans(session('product.alias').'.question6-e');
            }

            $customCopy.= trans(
                session('product.alias').'.question7'
            );
            $q7score = $this->getQuestionScoreNew(3, 'migration', 3);
            if($q7score <= 6){
                $customCopy.= trans(session('product.alias').'.question7-1');
            }elseif($q7score >= 7 && $q7score <= 12){
                $customCopy.= trans(session('product.alias').'.question7-2');
            }else{
                $customCopy.= trans(session('product.alias').'.question7-3');
            }
            $customCopy.= trans(
                session('product.alias').'.question7outro'
            );

            //Value
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.value-intro',
                [
                    'icon'=>asset('/images/tools/13/value_icon.png')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.value-graph',
                [
                    'overall'=>$widths[$overallNumber],
                    'value' => $widths[$valueNumber],
                    'url' => asset('/images/tools/13/comparison_value.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.value-'.$overallNumber.'-stage'.$valueNumber
            );

            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question8'
            );
            $q8answer = $this->getAnswerText(8, 'value', 1);
            if(in_array('Limited data visibility and classification', $q8answer)){
                $customCopy.= trans(session('product.alias').'.question8-a');
            }elseif(in_array('Breaking down the data silos - data consolidation', $q8answer)){
                $customCopy.= trans(session('product.alias').'.question8-b');
            }elseif(in_array('Data enrichment (use external data sources)', $q8answer)){
                $customCopy.= trans(session('product.alias').'.question8-c');
            }elseif(in_array('Analyse and activate data to support business decision making and strategy', $q8answer)){
                $customCopy.= trans(session('product.alias').'.question8-d');
            }elseif(in_array('Monetising data', $q8answer)){
                $customCopy.= trans(session('product.alias').'.question8-e');
            }

            $customCopy.= trans(
                session('product.alias').'.question9'
            );

            $q9score = $this->getQuestionScoreNew(9, 'value', 2);
            if($q9score <= 5){
                $customCopy.= trans(session('product.alias').'.question9-'.$overallNumber.'-1');
            } elseif($q9score >= 6 && $q9score <= 10){
                $customCopy.= trans(session('product.alias').'.question9-'.$overallNumber.'-2');
            }else{
                $customCopy.= trans(session('product.alias').'.question9-'.$overallNumber.'-3');
            }

            //conclusion is in report end.pdf

            $vars['sectionCopy'] = $customCopy;
        } elseif (session('product.id') == 14) { //VMware
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $infrastructureNumber =  (int) filter_var(session('result.network-infrastructure.rating'), FILTER_SANITIZE_NUMBER_INT);
            $operationsNumber =  (int) filter_var(session('result.intelligent-network-operations.rating'), FILTER_SANITIZE_NUMBER_INT);
            $securityNumber =  (int) filter_var(session('result.security-enabled-networking.rating'), FILTER_SANITIZE_NUMBER_INT);

            $customCopy = '';

            //overall
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');

            $user_score = session('result.overall.score');

            $customCopy.= trans(
                session('product.alias').'.introduction',
                ['approach' => asset('/images/tools/14/approach.svg')]
            );
            
            $customCopy.= '<div class="pb"></div>';
            $widths = [
                1 => '21mm',
                2 => '63mm',
                3 => '105mm',
            ];

            $customCopy.= trans(
                session('product.alias').'.overallintro'
            );
            $customCopy.= trans(
                session('product.alias').'.overallstage'.$overallNumber,
                [
                    'overall'=>$widths[$overallNumber],
                    'network-infrastructure'=>$widths[$infrastructureNumber],
                    'intelligent-network-operations'=>$widths[$operationsNumber],
                    'security-enabled-networking'=>$widths[$securityNumber],
                    'url'=>asset('/images/tools/14/comparisonbg_overall.svg')
                ]
            );


            //network-infrastructure
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.network-infrastructure-intro',
                [
                    'icon'=>asset('/images/tools/14/network-infrastructure_icon.svg')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.network-infrastructuregraph',
                [
                    'overall'=>$widths[$overallNumber],
                    'network-infrastructure' => $widths[$infrastructureNumber],
                    'url' => asset('/images/tools/14/comparison_network-infrastructure.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.network-infrastructure-'.$overallNumber.'-stage'.$infrastructureNumber
            );
            //$customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question1'
            );

            $q1score = $this->getQuestionScoreNew(1, 'network-infrastructure', 1);
            if($q1score < 2.5){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q1-1');
            }elseif($q1score >= 2.5 &&  $q1score < 3.5){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q1-2');
            }elseif($q1score >= 3.5){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q1-3');
            }
            
            $customCopy.= trans(
                session('product.alias').'.question2'
            );
            $q2score = $this->getQuestionScoreNew(2, 'network-infrastructure', 2);
            if($q2score == 1){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q2-1');
            }elseif($q2score == 2){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q2-2');
            }elseif($q2score == 3){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q2-3');
            }elseif($q2score == 4){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q2-4');
            }else{
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q2-5');
            }

            $customCopy.= trans(
                session('product.alias').'.question3'
            );
            $q3score = $this->getQuestionScoreNew(3, 'network-infrastructure', 3);
            if($q3score == 1){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q3-1');
            }elseif($q3score == 2){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q3-2');
            }elseif($q3score == 3){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q3-3');
            }elseif($q3score == 4){
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q3-4');
            }else{
                $customCopy.= trans(session('product.alias').'.network-infrastructure-'.$overallNumber.'-q3-5');
            }

            //intelligent-network-operations
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.intelligent-network-operations-intro',
                [
                    'icon'=>asset('/images/tools/14/intelligent-network-operations_icon.svg')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.intelligent-network-operationsgraph',
                [
                    'overall'=>$widths[$overallNumber],
                    'intelligent-network-operations' => $widths[$operationsNumber],
                    'url' => asset('/images/tools/14/comparison_intelligent-network-operations.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-stage'.$operationsNumber
            );

            //$customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question4'
            );

            $q4score = $this->getQuestionScoreNew(4, 'intelligent-network-operations', 1);
            if($q4score == 1){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q4-1');
            }elseif($q4score == 2){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q4-2');
            }elseif($q4score == 3){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q4-3');
            }elseif($q4score == 4){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q4-4');
            }else{
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q4-5');
            }

            $customCopy.= trans(
                session('product.alias').'.question5'
            );
            $q5score = $this->getQuestionScoreNew(5, 'intelligent-network-operations', 2);
            if($q5score == 1){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q5-1');
            }elseif($q5score == 2){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q5-2');
            }elseif($q5score == 3){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q5-3');
            }elseif($q5score == 4){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q5-4');
            }else{
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q5-5');
            }

            $customCopy.= trans(
                session('product.alias').'.question6'
            );
            $q6score = $this->getQuestionScoreNew(6, 'intelligent-network-operations', 3);
            if($q6score == 1){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q6-1');
            }elseif($q6score == 2){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q6-2');
            }elseif($q6score == 3){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q6-3');
            }elseif($q6score == 4){
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q6-4');
            }else{
                $customCopy.= trans(session('product.alias').'.intelligent-network-operations-'.$overallNumber.'-q6-5');
            }

            //security-enabled-networking
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.security-enabled-networking-intro',
                [
                    'icon'=>asset('/images/tools/14/security-enabled-networking_icon.svg')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.security-enabled-networkinggraph',
                [
                    'overall'=>$widths[$overallNumber],
                    'security-enabled-networking' => $widths[$securityNumber],
                    'url' => asset('/images/tools/14/comparison_security-enabled-networking.svg')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.security-enabled-networking-'.$overallNumber.'-stage'.$securityNumber
            );

            //$customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.question7'
            );
            $q7score = $this->getQuestionScoreNew(7, 'security-enabled-networking', 1);
            if($q7score == 1){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q7-1');
            }elseif($q7score == 2){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q7-2');
            }elseif($q7score == 3){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q7-3');
            }elseif($q7score == 4){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q7-4');
            }else{
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q7-5');
            }

            $customCopy.= trans(
                session('product.alias').'.question8'
            );

            $q8score = $this->getQuestionScoreNew(8, 'security-enabled-networking', 2);
            if($q8score < 2.5){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q8-1');
            }elseif($q8score >= 2.5 &&  $q8score < 3.5){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q8-2');
            }elseif($q8score >= 3.5){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q8-3');
            }

            $customCopy.= trans(
                session('product.alias').'.question9'
            );

            $q9score = $this->getQuestionScoreNew(9, 'security-enabled-networking', 3);
            if($q9score == 1){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q9-1');
            }elseif($q9score == 2){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q9-2');
            }elseif($q9score == 3){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q9-3');
            }elseif($q9score == 4){
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q9-4');
            }else{
                $customCopy.= trans(session('product.alias').'.security-enabled-networking-'.$overallNumber.'-q9-5');
            }

            $customCopy.= trans(
                session('product.alias').'.conclusionintro',
                ['icon' => asset('/images/tools/14/conclusion_icon.svg')]
            );

            $customCopy.= trans(
                session('product.alias').'.guidance'
            );

            $customCopy.= trans(
                session('product.alias').'.guidance-'.$overallNumber
            );

            $vars['sectionCopy'] = $customCopy;
        } elseif(session('product.id') == 15) { //SAPAgile
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $strategicPlanningNumber =  (int) filter_var(session('result.strategic-planning.rating'), FILTER_SANITIZE_NUMBER_INT);
            $processesNumber =  (int) filter_var(session('result.processes.rating'), FILTER_SANITIZE_NUMBER_INT);
            $customerRelationshipsNumber =  (int) filter_var(session('result.customer-relationships.rating'), FILTER_SANITIZE_NUMBER_INT);
            $suppliersDistributorsNumber =  (int) filter_var(session('result.suppliers-distributors.rating'), FILTER_SANITIZE_NUMBER_INT);
            $peopleExperienceNumber =  (int) filter_var(session('result.people-experience.rating'), FILTER_SANITIZE_NUMBER_INT);

            $customCopy = '';

            //introduction
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');

            $user_score = session('result.overall.score');

            $customCopy.= trans(
                session('product.alias').'.introduction',
                [
                    'url' => asset('/images/tools/15/check.png'),
                    'stage' =>  $overallNumber,
                    'name' => trans(session('product.alias').'.'.session('result.overall.rating'))
                ]
            );

            //overall
            $customCopy.= trans(
                session('product.alias').'.overall-'.$overallNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$overallNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );
            //strategic-planning
            $customCopy.= trans(
                session('product.alias').'.strategic-planning-'.$strategicPlanningNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$strategicPlanningNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );
            //processes
            $customCopy.= trans(
                session('product.alias').'.processes-'.$processesNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$processesNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );
            //customer-relationships
            $customCopy.= trans(
                session('product.alias').'.customer-relationships-'.$customerRelationshipsNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$customerRelationshipsNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );
            //suppliers-distributors
            $customCopy.= trans(
                session('product.alias').'.suppliers-distributors-'.$suppliersDistributorsNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$suppliersDistributorsNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );
            //people-experience
            $customCopy.= trans(
                session('product.alias').'.people-experience-'.$peopleExperienceNumber,
                [
                    'url' => asset('/images/tools/15/bar_'.$peopleExperienceNumber.'.png'),
                    'company' => session('user.company', 'Your company scored')
                ]
            );

            $vars['sectionCopy'] = $customCopy;
        } elseif(session('product.id') == 16){ //IBM
            //User overall stage number and ordinal
            $overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
            $moveNumber =  (int) filter_var(session('result.move.rating'), FILTER_SANITIZE_NUMBER_INT);
            $buildNumber =  (int) filter_var(session('result.build.rating'), FILTER_SANITIZE_NUMBER_INT);
            $manageNumber =  (int) filter_var(session('result.manage.rating'), FILTER_SANITIZE_NUMBER_INT);

            $customCopy = '';

            //overall
            $base = config('baseline_'.session('product.id').'.overall');
            $rating = session('result.overall.rating');

            $user_score = session('result.overall.score');

            $customCopy.= trans(session('product.alias').'.introduction1',[
                'url1' => asset('/images/tools/16/data_point_1.png'),
                'url2' => asset('/images/tools/16/data_point_2.png'),
                'url3' => asset('/images/tools/16/data_point_3.png'),
            ]);
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(session('product.alias').'.introduction2');
            $customCopy.= trans(session('product.alias').'.introduction3',[
                'url' => asset('/images/tools/16/evaluating.png')
            ]);
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(session('product.alias').'.introduction4',[
                'url' => asset('/images/tools/16/rankings.png')
            ]);

            $customCopy.= '<div class="pb"></div>';

            $widths = [
                1 => '21mm',
                2 => '63mm',
                3 => '105mm',
            ];

            $customCopy.= trans(
                session('product.alias').'.overallstage'.$overallNumber,
                [
                    'overall'=>$widths[$overallNumber],
                    'move'=>$widths[$moveNumber],
                    'build'=>$widths[$buildNumber],
                    'manage'=>$widths[$manageNumber],
                    'url'=>asset('/images/tools/16/comparisonbg_overall.svg')
                ]
            );

            //move
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.move-intro',
                [
                    'icon'=>asset('/images/tools/16/move_icon.png')
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.move-'.$moveNumber,
                [
                    'url' => asset('/images/tools/16/comparison_move_'.$moveNumber.'.png')
                ]
            );
            
            //build
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.build-intro',
                [
                    'icon'=>asset('/images/tools/16/build_icon.png')
                ]
            );
            
            $customCopy.= trans(
                session('product.alias').'.build-'.$buildNumber,
                [
                    'url' => asset('/images/tools/16/comparison_build_'.$buildNumber.'.png')
                ]
            );

            //manage
            $customCopy.= '<div class="pb"></div>';
            $customCopy.= trans(
                session('product.alias').'.manage-intro',
                [
                    'icon'=> asset('/images/tools/16/manage_icon.png'),
                    'url1'=> asset('/images/tools/16/data_point_4.png'),
                    'url2'=> asset('/images/tools/16/data_point_5.png'),
                ]
            );

            $customCopy.= trans(
                session('product.alias').'.manage-'.$manageNumber,
                [
                    'url' => asset('/images/tools/16/comparison_manage_'.$manageNumber.'.png')
                ]
            );

            
            $customCopy.= trans(
                session('product.alias').'.conclusion',
                [
                    'icon' => asset('/images/tools/16/conclusion_icon.png')
                ]
            );

            $vars['sectionCopy'] = $customCopy;
        } else {
            foreach (config('baseline_'.session('product.id')) as $section => $values) {
                preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
                $sectionRating =  (int)$matches[0][0];
                if (config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph')) {
                    $sectionGraph = Lava::DataTable();
                    $numformat = Lava::NumberFormat([
                        'suffix'         => '%'
                    ]);
                    $sectionGraph->addColumns([
                        ['string', 'Stage'],
                        ['number', 'Your Score',$numformat],
                    ]);
                    $sectionGraph->addRoleColumn('string', 'style');
                    $sectionGraph->addRoleColumn('string', 'annotation');
                    
                    foreach ($values['types'] as $stage => $params) {
                        $val = $params['benchmark'];
                        $sectionGraph->addRow([
                          $locale == 'es' ? substr(trans(session('product.alias').'.'.$stage), 0, strpos(trans(session('product.alias').'.'.$stage), ':')):trans(session('product.alias').'.'.$stage),//$stage
                          $val,
                          session('result.'.$section.'.rating')==$stage? config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'):null,
                          $val."%"
                        ]);
                    }
                    
                    $sectionChart = Lava::ColumnChart($section.'_graph', $sectionGraph, $chartSettings);

                    $newSectionGraphData = [
                        'labels'=>[],
                        'datasets'=>[
                            [
                                'fillColor' => "#6BABDB",
                                'strokeColor' => "#6BABDB",
                                'data' => []
                            ]
                        ]
                    ];
                    $index = 0;
                    $highlightBar = 0;
                    foreach ($values['types'] as $stage => $params) {
                        if (session('result.'.$section.'.rating')==$stage) {
                            $highlightBar = $index;
                        }
                        $val = $params['benchmark'];
                        $newSectionGraphData['labels'][] = strpos(trans(session('product.alias').'.'.$stage), ':') !== false ? substr(trans(session('product.alias').'.'.$stage), 0, strpos(trans(session('product.alias').'.'.$stage), ':')) : trans(session('product.alias').'.'.$stage);
                        $newSectionGraphData['datasets'][0]['data'][] = $val;
                        $index++;
                    }
                    $chart = $newSectionGraphData;
                }
                $extraChart = [];
                $newExtraChart = [];
                if (config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs')) {
                    foreach (config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs') as $key => $graph) {
                        // $extraGraph = Lava::DataTable();
                        // $graphCols = [];
                        // foreach ($graph['columns'] as $colKey => $col) {
                        // 	if(isset($col['format'])){
                        // 		$format = Lava::$col['format']['type']($col['format']['format']);
                        // 	}
                        // 	$graphCols[] = [$col['type'],$col['label'], isset($col['format']) ? $format:null];
                        // }
                        // $extraGraph->addColumns($graphCols);

                        // if($graph['role-columns']){
                        // 	foreach ($graph['role-columns'] as $rolKey => $rol) {
                        // 		$extraGraph->addRoleColumn($rol['type'], $rol['role']);
                        // 	}
                  //       }
                        $extraSectionGraphData = [
                            'labels'=>[],
                            'datasets'=>[
                                [
                                    'fillColor' => "#6BABDB",
                                    'strokeColor' => "#6BABDB",
                                    'data' => []
                                ]
                            ]
                        ];
                        $index = 0;
                        $highlightBar = 0;
                        foreach (config('baseline_'.session('product.id').'.overall.types') as $extraSection => $extraSettings) {
                            foreach (session('questions.'.$graph['question']['section'].'.pages') as $pKey => $page) {
                                foreach ($page['questions'] as $qKey => $question) {
                                    if ($qKey==$graph['question']['question']) {
                                        $selected = explode('|', $question['selected']);
                                        $userAnswer = $selected[0];
                                        $userAnswer = strtolower(str_replace(" ", "-", $userAnswer));
                                    }
                                }
                            }
                            $val = isset($extraSettings[$graph['data']][$userAnswer]) ? $extraSettings[$graph['data']][$userAnswer] : $extraSettings['benchmark'];
                            $extraSectionGraphData['labels'][] = trans(session('product.alias').'.'.$extraSection);//$extraSection
                            $extraSectionGraphData['datasets'][0]['data'][] = $val;

                            /*$extraGraph->addRow([
						      trans(session('product.alias').'.'.$extraSection),//$extraSection
						      $val,
						      session('result.'.$section.'.rating')==$extraSection? config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'):null,
						      $val."%"
						  ]);*/
                        }
                        
                        //$extraChart[$section.'_'.$key.'_graph'] = Lava::ColumnChart($section.'_'.$key.'_graph', $extraGraph, $chartSettings);
                        $newExtraChart[$section.'_'.$key.'_graph'] = $extraSectionGraphData;
                    }
                }
                $vars['sections'][$section] = [
                    'title' => trans(session('product.alias').'.'.$section.'.title'),
                    'hidetitle' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title'),
                    'hidetitlebar' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title-bar'),
                    'hiderating' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-rating', false),
                    'introduction' => Lang::has(session('product.alias').'.'.$section.'.introduction') ? trans(session('product.alias').'.'.$section.'.introduction', [
                        'result'=>trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
                        'benchmark'=>config('baseline_'.session('product.id').'.'.$section.'.types.'.session('result.'.$section.'.rating').'.benchmark')
                    ]):false,
                    'seckey' => $section,
                    'pageimage' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pageimage') ? trans(session('product.alias').'.'.$section.'.pageimage'):false,
                    'color' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'),
                    'designline' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.designline'),
                    //'graph' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph'),
                    'chart' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph') ? json_encode($chart) : false,
                    'graph-title' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph-title'),
                    'extraCharts' => !empty($extraChart) ? $extraChart: false,
                    'newExtraChart' => !empty($newExtraChart) ? $newExtraChart: false,
                    'pb' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pb'),
                    'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
                    'sectionRating' => $sectionRating,
                    'score' => session('result.'.$section.'.score'),
                    'paragraph' => trans(session('product.alias').'.'.$section.'.'.session('result.'.$section.'.rating')),
                ];
                /*if(strlen($vars['sections'][$section]['paragraph']) > 400){
					$para = $vars['sections'][$section]['paragraph'];
					$lastP = strrpos ($para, '</p>', 400);
					$para = substr_replace($para, '<div class="pb"></div>', $lastP+4, 0);
					dd($para);
				}*/
                

                $headervars['page'.$count] = !$vars['sections'][$section]['hidetitlebar'] ? trans(session('product.alias').'.'.$section.'.title') : '';
                $headervars['page_offset'] = config('baseline_'.session('product.id').'.overall.report-settings.page-offset', 1);
                $count++;
            }

            $vars['introduction'] = Lang::has(session('product.alias').'.introduction') ? trans(
                session('product.alias').'.introduction',
                [
                    'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
                    'stage'=>session('result.overall.rating'),
                    'stagegraphic' => asset('images/tools/'.session('product.id').'/'.session('result.overall.rating').'.svg')
                ]
            ) : false;
            $vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
            $vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
            $vars['questions'] = session('questions');
        }
        

        //return $vars['sections'];
        //dd(session('result'));
        if ($request->query('browser')) {
            return view('tool.'.session('template').'.report.report', $vars);
        }
        $margintop = 25;
        if (null !== config('baseline_'.session('product.id').'.overall.report-settings.margin-top')) {
            $margintop = config('baseline_'.session('product.id').'.overall.report-settings.margin-top');
        }
        $headerspacing = 0;
        if (null !== config('baseline_'.session('product.id').'.overall.report-settings.header-spacing')) {
            $headerspacing = config('baseline_'.session('product.id').'.overall.report-settings.header-spacing');
        }
        
        $pdf = PDF::loadView('tool.'.session('template').'.report.report', $vars)
        ->setOption('margin-top', $margintop)
        ->setOption('margin-left', 0)
        ->setOption('margin-right', 0)
        //->setOption('viewport-size', '1280x1024')
        //->setOption('orientation', 'Landscape')
        //->setOption('dpi', 36)
        //->setOption('dpi', 36)
        ->setOption('window-status', 'chartrendered')
        ->setOption('header-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/header')
        ->setOption('header-spacing', $headerspacing)
        ->setOption('footer-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/footer')
        ->setOption('footer-spacing', 2);
        //->setOption('replace', $headervars);
        if (session('product.id')==16) {
            $timeStamp = time();
            $pdf->save(storage_path().'/ibmcloud-'.$timeStamp.'.pdf');
            //return $pdf->inline('invoice.pdf');
            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/ibmcloud_cover'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/ibmcloud-'.$timeStamp.'.pdf', 'all');


            $merge->merge();
            $merge->save(storage_path().'/reports/ibmcloud-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/ibmcloud-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/ibmcloud-'.$timeStamp.'.pdf');
            }
        }elseif (session('product.id')==15) {
            //$pdf->setOption('cover', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/footer');
            $pdf->setOption('orientation', 'Landscape');
            $pdf->setOption('margin-bottom', 20);
            $timeStamp = time();
            $pdf->save(storage_path().'/sapagile-'.$timeStamp.'.pdf');
            // $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            // $merge->addPDF(storage_path().'/sapagile_cover'.$locale .'.pdf', 'all');
            // $merge->addPDF(storage_path().'/sapagile-'.$timeStamp.'.pdf', 'all');


            // $merge->merge();
            // $merge->save(storage_path().'/reports/sapagile-'.$timeStamp.'.pdf','browser');
            $merge = new NewPDF([
                'A' => storage_path().'/sapagile_cover'.$locale .'.pdf',
                'B' => storage_path().'/sapagile-'.$timeStamp.'.pdf'
            ]);

            $merge->cat(1, 'end', 'A')->cat(1, 'end', 'B')->saveAs(storage_path().'/reports/sapagile-'.$timeStamp.'.pdf');

            if (File::exists(storage_path().'/sapagile-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/sapagile-'.$timeStamp.'.pdf');
            }
            return response()->file(storage_path().'/reports/sapagile-'.$timeStamp.'.pdf');
        }elseif (session('product.id')==14) {
            //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            $pdf->save(storage_path().'/vmware-'.$timeStamp.'.pdf');
            //return $pdf->inline('invoice.pdf');
            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/vmware_cover'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/vmware-'.$timeStamp.'.pdf', 'all');


            $merge->merge();
            $merge->save(storage_path().'/reports/vmware-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/vmware-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/vmware-'.$timeStamp.'.pdf');
            }
        }elseif (session('product.id')==13) {
            //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            $pdf->save(storage_path().'/hitachi-'.$timeStamp.'.pdf');
            //return $pdf->inline('invoice.pdf');
            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/hitachi_cover'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/hitachi-'.$timeStamp.'.pdf', 'all');
            $merge->addPDF(storage_path().'/hitachi_end'.$locale .'.pdf', 'all');


            $merge->merge();
            $merge->save(storage_path().'/reports/hitachi-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/hitachi-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/hitachi-'.$timeStamp.'.pdf');
            }
        } elseif (session('product.id')==12) {
            //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            $pdf->save(storage_path().'/dassault-'.$timeStamp.'.pdf');

            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/dassault_cover'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/dassault-'.$timeStamp.'.pdf', 'all');

            $merge->merge();
            $merge->save(storage_path().'/reports/dassault-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/dassault-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/dassault-'.$timeStamp.'.pdf');
            }
        }elseif (session('product.id')==10) {
            //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            //return $pdf->inline('invoice.pdf');
            $pdf->save(storage_path().'/nttdata-report-'.$timeStamp.'.pdf');

            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/nttdata-output-report_start'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/nttdata-report-'.$timeStamp.'.pdf', 'all');
            $merge->addPDF(storage_path().'/nttdata-output-report_end'.$locale .'.pdf', 'all');

            $merge->merge();
            $merge->save(storage_path().'/reports/nttdata-report-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/nttdata-report-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/nttdata-report-'.$timeStamp.'.pdf');
            }
        } elseif (session('product.id')==9) {
            //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            //return $pdf->inline('invoice.pdf');
            $pdf->save(storage_path().'/trend-micro-report-'.$timeStamp.'.pdf');

            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/trend-micro_start'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/trend-micro-report-'.$timeStamp.'.pdf', 'all');

            $merge->merge();
            $merge->save(storage_path().'/reports/trend-micro-report-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/trend-micro-report-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/trend-micro-report-'.$timeStamp.'.pdf');
            }
        } elseif (session('product.id')==8) {
                //$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
            $timeStamp = time();
            $pdf->save(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf');



            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/ntt_report_start'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf', 'all');

            $merge->merge();
            $merge->save(storage_path().'/reports/ntt-sdwan-report-'.$timeStamp.'.pdf','browser');
            if (File::exists(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf');
            }
            if (File::exists(storage_path().'/ntt-sdwan-report-cover-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/ntt-sdwan-report-cover-'.$timeStamp.'.pdf');
            }
        } elseif (session('product.id')==2) {
            $timeStamp = time();
            $pdf->save(storage_path().'/fireeye-report-'.$timeStamp.'.pdf');
            $merge = PDFMerger::init();
            $locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

            $merge->addPDF(storage_path().'/fireeye_report_start'.$locale .'.pdf', 'all');
            $merge->addPDF(storage_path().'/fireeye-report-'.$timeStamp.'.pdf', 'all');
            $merge->addPDF(storage_path().'/fireeye_report_end'.$locale .'.pdf', 'all');

            $merge->merge();
            $merge->save(storage_path().'/fireeye-report-'.$timeStamp.'_final.pdf','browser');
            if (File::exists(storage_path().'/fireeye-report-'.$timeStamp.'.pdf')) {
                File::delete(storage_path().'/fireeye-report-'.$timeStamp.'.pdf');
            }
        } else {
            return $pdf->inline('invoice.pdf');
        }
    }
    private function getQuestionScore($q, $section, $type = 'q')
    {
        $selected = session('questions.'.$section.'.pages.page'.$q.'.questions.'.$type.$q.'.selected');
        $total = 0;
        if (is_array($selected)) {
            foreach ($selected as $select) {
                $select = explode("|", $select);
                $total += $select[1];
            }
        } else {
            $select = explode("|", $selected);
            $total = $select[1];
        }
        return $total;
    }

    private function getQuestionScoreNew($q, $section, $page = false, $type = 'q')
    {
        $page = $page == false ? $q : $page;
        $selected = session('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.selected');
        //if(!is_array($selected)) dd('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.selected');
        if (count($selected)>1) {
            $calc = session()->has('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.calc') ? session('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.calc') : false;
            if ($calc) {
                if ($calc['type']=='average') {
                    $ave = [];
                    foreach ($selected as $select) {
                        $ave[]=$select['value'];
                    }
                    $val = array_sum($ave) / count($ave);
                } elseif ($calc['type']=='normalize') {
                    $norm = 0;
                    foreach ($selected as $select) {
                        $norm+=$select['value'];
                    }
                    $val = ($norm/$details['calc']['value'])*count($details['selected']);
                }
            } else{
                $hold = 0;
                foreach ($selected as $select) {
                    $hold+=$select['value'];
                }
                $val = $hold;
            }
        } else {
            $val = $selected[0]['value'];
        }
        return $val;
    }

    private function getAnswerText($q, $section, $page = false, $type = 'q')
    {
        $page = $page == false ? $q : $page;
        $selected = session('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.selected');
        $text = 0;
        if (is_array($selected)) {
            $text = [];
            foreach ($selected as $select) {
                if (is_array($select) && isset($select['label'])) {
                    $text[]=$select['label'];
                } else {
                    $select = explode("|", $select);
                    $text[] = $select[0];
                }
            }
        } else {
            $select = explode("|", $selected);
            $text = $select[0];
        }
        return $text;
    }
}
