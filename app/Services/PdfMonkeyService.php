<?php

namespace App\Services;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Facades\Log;

class PdfMonkeyService
{
	public function generateBody($assessment)
	{
		$tool = $assessment->tool;
		$result = $assessment->result;
		$extra = $assessment->extra;
		$quiz = $assessment->quiz;

	    if($assessment->tool_id == 18) { //snow
    		$industry = $extra['industry'];
	    	$body = [
	    		'url' => url('/images/tools/18/'), 
	    		'cover' => url('/images/tools/18/report_cover.png'), 
	    		'agility_image' => url('/images/tools/18/agility.svg'), 
	    		'5levels' => url('/images/tools/18/5levels.svg'), 
	    		'legend' => url('/images/tools/18/graphs/legend.svg'),
	    		'intro' => trans($tool->alias.'.intro.'.$industry),
	    		'overall' => [
	    			'result' => $result['overall']['rating'],
	    			'stage' => trans($tool->alias.'.'.$result['overall']['rating']),
	    			'graph' => url('/images/tools/18/graphs/'.$industry.'_overall.svg'),
	    			'para1' => trans($tool->alias.'.overall.para1'),
	    			'graphic_stat' => trans($tool->alias.'.overall.'.$industry),
	    			'source' => trans($tool->alias.'.overall.source', ['industry' => trans($tool->alias.'.industry.'.$industry)]),
	    			'para2' => trans($tool->alias.'.overall.'.$result['overall']['rating'])
	    		],
	    		'sections' => [],
	    		'recommendations' => trans($tool->alias.'.recommendations')
	    	];
	    	foreach(config('baseline_'.$tool->id) as $secKey => $sec) {
	    		if($secKey !== 'overall'){
	    			$rating = $result[$secKey]['rating'];
	    			$section = [
	    				'title' => trans($tool->alias.'.'.$secKey.'.title'),
	    				'color' => trans($tool->alias.'.'.$secKey.'.color'),
	    				'result' => $rating,
	    				'graph' => url('/images/tools/18/graphs/'.$industry.'_'.$secKey.'.svg'),
	    				'stage' => trans($tool->alias.'.'.$rating),
	    				'para1' => trans($tool->alias.'.'.$secKey.'.common1'),
	    				'para2' => trans($tool->alias.'.'.$secKey.'.para1', ['stage' => trans($tool->alias.'.'.$rating), 'industry' => trans($tool->alias.'.industry.'.$industry)]),
	    				'graphic_stat' => trans($tool->alias.'.overall.'.$industry),
	    				'source' => trans($tool->alias.'.overall.source', ['industry' => trans($tool->alias.'.industry.'.$industry)]),
	    				'para3' => trans($tool->alias.'.'.$secKey.'.common2'),
	    				'stage_heading' => trans($tool->alias.'.'.$secKey.'.'.$rating.'.title'),
	    				'stage_para' => trans($tool->alias.'.'.$secKey.'.'.$rating.'.para'),
	    				'recommendations' => trans($tool->alias.'.'.$secKey.'.'.$rating.'.recommendations')
	    			];
	    			$body['sections'][] = $section;
	    		}
	    	}
	    }
        if($assessment->tool_id == 19) { //redhat
            $body = [
                'url' => url('/images/tools/19/'), 
                'cover' => url('/images/tools/19/report_cover.png'), 
                'width' => [
                    'stage1' => 15,
                    'stage2' => 45,
                    'stage3' => 65
                ],
                'overall' => [
                    'result' => $result['overall']['rating'],
                    'stage' => trans($tool->alias.'.'.$result['overall']['rating']),
                    'para1' => trans($tool->alias.'.overall.'.$result['overall']['rating'].'.para1'),
                    'para2' => trans($tool->alias.'.overall.'.$result['overall']['rating'].'.para2'),
                    'recommendations' => trans($tool->alias.'.overall.'.$result['overall']['rating'].'.recommendations')
                ],
                'sections' => [],
                'recommendations' => trans($tool->alias.'.recommendations')
            ];
            foreach(config('baseline_'.$tool->id) as $secKey => $sec) {
                if($secKey !== 'overall' && $secKey !== 'general'){
                    $rating = $result[$secKey]['rating'];
                    $section = [
                        'title' => trans($tool->alias.'.'.$secKey.'.title'),
                        'color' => trans($tool->alias.'.'.$secKey.'.color'),
                        'result' => $rating,
                        'graph' => $secKey.'_'.$rating.'.svg',
                        'stage' => trans($tool->alias.'.'.$rating),
                        'top' => trans($tool->alias.'.'.$secKey.'.top'),
                        'para1' => trans($tool->alias.'.'.$secKey.'.para1'),
                        'para2' => trans($tool->alias.'.'.$secKey.'.'.$rating.'.para2'),
                        'recommendations' => trans($tool->alias.'.'.$secKey.'.'.$rating.'.recommendations')
                    ];
                    $body['sections'][] = $section;
                }
            }
        }
	    return $body;
	}
    public function generateDocument($body, $templateId, $status = 'draft')
    {
    	$headers = [
    		'Authorization' => 'Bearer ' . env('PDFMONKEY_KEY'),        
    		'Content-Type'        => 'application/json',
    	];

    	$data = [
    		'document_template_id' => $templateId,
    		'payload' => json_encode($body),
    		'status' => $status
    	];


        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('POST', env('PDFMONEKY_URL'), [
                'body' => json_encode($data),
                'headers' => $headers,
            ]);
           
            Log::info(print_r(json_decode($response->getBody()),true));
            return json_decode($response->getBody());
        } catch (RequestException $e) {
            Log::info('request');
            Log::info(print_r(json_encode($data), true));
            Log::info(print_r($headers, true));
            Log::info(json_encode($body));
            Log::info(print_r($e->getMessage(), true));
            return false;
        } catch (ServerException $e) {
            Log::info('server');
            Log::info(print_r($data, true));
            Log::info(print_r($headers, true));
            Log::info($e->getMessage());
            Log::info(json_encode($body));
            return false;
        }
    }

    public function queueDocument($documentId, $filename, $status = 'pending')
    {
    	$headers = [
    		'Authorization' => 'Bearer ' . env('PDFMONKEY_KEY'),        
    		'Content-Type'        => 'application/json',
    	];

    	$data = [
    		'document' => [
	    		'meta' => [
	    			'_filename' => $filename
	    		],
	    		'status' => $status
    		]
    	];


        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('PUT', env('PDFMONEKY_URL').'/'.$documentId, [
                'body' => json_encode($data),
                'headers' => $headers,
            ]);
           
            Log::info(print_r(json_decode($response->getBody()),true));
            return json_decode($response->getBody());
        } catch (RequestException $e) {
            Log::info('request');
            Log::info(json_encode($data));
            Log::info($documentId);
            Log::info(print_r($e->getMessage(), true));
            return false;
        } catch (ServerException $e) {
            Log::info('server');
            Log::info(json_encode($data));
            Log::info($documentId);
            Log::info($e->getMessage());
            return false;
        }
    }

    public function checkIfDocumentRenderedAndGetUrl($documentId)
    {
    	$headers = [
    		'Authorization' => 'Bearer ' . env('PDFMONKEY_KEY'),        
    		'Content-Type'        => 'application/json',
    	];

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('get', env('PDFMONEKY_URL').'/'.$documentId, [
                'headers' => $headers,
            ]);
            $responseObject = json_decode($response->getBody());
            return $responseObject;
        } catch (RequestException $e) {
            Log::info(json_encode($body));
            Log::info(print_r($e->getMessage(), true));
            Log::info('request');
        } catch (ServerException $e) {
            Log::info('server');
            Log::info($e->getMessage());
            Log::info(json_encode($body));
        }
    }
}
