<?php

namespace App\Reports;

use App\Tool;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

require_once base_path('vendor/goat1000/svggraph/SVGGraph.php');

class generateReport
{
    protected $tool;

    /**
     * Initializes the class.
     *
     * @return void
     */
    public function __construct(Tool $tool)
    {
        $this->tool = $tool;
    }

    public function generate()
    {
        $tool = $this->tool;
        $tool->load('assessments');

        //columsn to download
        $chosenColumns = ['id', 'created_at', 'fname', 'lname', 'email', 'company', 'title', 'country', 'tel', 'referer', 'code', 'rating', 'extra', 'result'];

        $cleanresults = $tool->assessments;

        if (config('baseline_'.$tool->id.'.overall.include_answers_in_download_report')) {
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
                $telNum = array_search('tel', array_keys($assessment));
            }
            if (! is_null($assessment['extra']) && $assessment['extra'] != 'null' && (is_array($assessment['extra']) || is_object($assessment['extra']))) {
                foreach ($assessment['extra'] as $exKey => $extra) {
                    if (! is_null($extra)) {
                        $assessments[ucfirst($assKey)][$exKey] = $extra;
                    }
                }
            }
            unset($assessments[$assKey]['extra']);
            foreach ($assessment['result'] as $resKey => $result) {
                if ($resKey != 'overall') {
                    if ($result['rating']) {
                        $assessments[$assKey][trans($tool->alias.'.'.$resKey.'.title')] = trans($tool->alias.'.'.$result['rating']);
                    } else {
                        $assessments[$assKey][trans($tool->alias.'.'.$resKey.'.title')] = '';
                    }
                }
            }
            unset($assessments[$assKey]['result']);

            if (isset($assessment['quiz']) && ! is_null($assessment['quiz']) && $assessment['quiz'] != 'null' && (is_array($assessment['quiz']) || is_object($assessment['quiz']))) {
                foreach ($assessment['quiz'] as $qKey => $q) {
                    if (is_array($q)) {
                        $num = 1;

                        foreach ($q as $key => $value) {
                            if (is_array($value)) {
                                $newKey = strpos($key, 'q') === false ? 'q'.str_replace('.', '_', $value['name']) : $value['name'];
                                $assessments[$assKey][$newKey] = $value['label'];
                                $num++;
                            } else {
                                $newKey = strpos($key, 'q') === false ? $qKey.'_'.$num : str_replace('.', '_', $key);
                                //echo $newKey;
                                $assessments[$assKey][$newKey] = substr($value, 0, stripos($value, '|'));
                                $num++;
                            }
                        }
                    } else {
                        $assessments[$assKey][$qKey] = substr($q, 0, stripos($q, '|'));
                    }
                }
                unset($assessments[$assKey]['quiz']);
            }
            $cols = count($assessments[$assKey]) > $cols ? count($assessments[$assKey]) : $cols;
        }

        $alphas = range('A', 'Z');

        $file = Excel::create(Str::slug($tool->title.' '.$tool->sub_title), function ($excel) use ($assessments, $cols, $alphas, $telNum) {
            $excel->sheet('Assessments', function ($sheet) use ($assessments, $cols, $alphas, $telNum) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray($assessments);

                $sheet->cells('A1', function ($cells) {
                    $cells->setBackground('#EFEFEF');
                    $cells->setFont([
                        //'family'     => 'Calibri',
                        //'size'       => '14',
                        'bold'       =>  true,
                        ]);
                });
                $sheet->freezeFirstRow();
                /*$sheet->setColumnFormat(array(
                    $alphas[$telNum+1] => '[<=9999999]###-####;(###) ###-####'
                    ));*/
            });
        });

        return $file;
    }
}
