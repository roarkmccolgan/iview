<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItalyController extends Controller
{
    public function index()
    {
    	$client = new \GuzzleHttp\Client([
    		'base_uri' => 'https://selfserve.decipherinc.com/api/v1/surveys/selfserve/',
    		'headers' => [
		        'x-apikey' => 'um2mzvqjs4zjhqn5e9xvp2a6bnybkyq6h01degmgn68qdwkqq4en77vwn0bnxv9v',
		    ]
    	]);
    	try {
            $answerRequest = $client->request('GET', '21eb/190309/data', [
            	'query' => [
            		'format' => 'json',
            		'cond' => 'uuid=="ez2zxy78q5p3shrz"'
            	]
			]);

			$answers = json_decode($answerRequest->getBody(),true);

			$questionRequest = $client->request('GET', '21eb/190309/datamap', [
            	'query' => [
            		'format' => 'json',
            	]
			]);

			$questions = collect(json_decode($questionRequest->getBody(),true))->only('questions')->flatten(1)->mapWithKeys(function($item){
				return [$item['qlabel'] => $item];
			});

			return $questions;
        } catch (GuzzleHttp\Exception\RequestException $e) {
            return $e->getMessage();
        }
    }
}
