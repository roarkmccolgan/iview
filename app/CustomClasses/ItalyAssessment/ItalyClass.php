<?php
namespace App\CustomClasses\ItalyAssessment;


class ItalyClass
{

	
	function loadHtml($respondantUuid = 'f9z3sduwbdxrbyx4')
	{
		//load data
        include(app_path() . '/CustomClasses/ItalyAssessment/data.php');
        
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://selfserve.decipherinc.com/api/v1/surveys/selfserve/',
            'headers' => [
                'x-apikey' => 'um2mzvqjs4zjhqn5e9xvp2a6bnybkyq6h01degmgn68qdwkqq4en77vwn0bnxv9v',
            ]
        ]);
        try {
            $answerRequest = $client->request('GET', '21eb/180705/data', [
                'query' => [
                    'format' => 'json',
                    'cond' => 'uuid=="f9z3sduwbdxrbyx4"'
                ]
            ]);
            
            $questionRequest = $client->request('GET', '21eb/180705/datamap', [
                'query' => [
                    'format' => 'json',
                ]
            ]);
        } catch (GuzzleHttp\Exception\RequestException $e) {
            return $e->getMessage();
        }
        $questions = collect(json_decode($questionRequest->getBody(), true))->only('questions')->flatten(1)->filter(function($item){
            return isset($item['variables']) && isset($item['qtitle']);
        })->pluck(['variables'])->flatten(1);

        // $questions = collect($jsonQuestions)->only('questions')->flatten(1)->filter(function($item){
        //     return isset($item['variables']) && isset($item['qtitle']);
        // })->pluck(['variables'])->flatten(1);

        //$questions = collect(json_decode(Storage::disk('local')->get('/italyFiles/questions.json'),true));

        $singleQuestions = $questions->mapWithKeys(function($item){
            return [$item['label'] => $item['rowTitle']];
        });
        $singleQuestionsText = $questions->filter(function($item, $key){
            return strpos($item['qlabel'], 's') === false;
        })->mapWithKeys(function($item){
            return [$item['label'] => $item['qtitle']];
        });

        $answer = collect(json_decode($answerRequest->getBody(), true))->first();
        
        //$answer =  collect(json_decode(Storage::disk('local')->get('/italyFiles/answer.json'), true));

        $industry =  collect($answer)->only(array_keys($industryKeys))->filter()->keys()->first();
        $size =  collect($answer)->only(array_keys($sizeKeys))->filter()->keys()->first();
        //graph settings

        $graphSettings = array(
            'back_colour' => '#FFF',
            'stroke_colour' => NULL,
            'back_stroke_width' => 0,
            'back_stroke_colour' => '#EFEFEF',

            'grid_division_h' => 10,
            
            'axis_colour' => '#FFF',
            'axis_text_colour' => '#000',
            'axis_overlap' => 2,
            'axis_font' => 'system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif',
            'axis_font_size' => 10,
            'show_grid' => true,
            'show_grid_h' => false,
            'grid_colour' => '#EFEFEF',
            'label_colour' => '#000',
            'pad_right' => 20,
            'pad_left' => 20,
            'minimum_grid_spacing' => 20,
        );

        $q1question = '
        	<h3>Q1: In which of the following areas has your company implemented or does it plan to implement Big Data and analytics initiatives?</h3>
        ';
        $q1intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		This question shows the level of interest in Big Data Solutions, and which use cases are the ones that see the most implementations. The focus differs by size band and industry, and the charts below are for the specific size band and industries selected.
        	</p>
        ';        

        //questionSize1
        $q1Sizeset = $sizeReference['q1'][$size];
        $q1SizeAnswers = collect($answer)->only(array_keys($q1Sizeset))->filter();
        $q1Sizelabels = collect($singleQuestions)->filter(function($item, $key) use($q1SizeAnswers){
            return collect($q1SizeAnswers->keys())->contains($key);                
        });

        //q1SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q1GraphSizeValues = collect($sizeGraphReference['q1'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q1GraphSizeValues);
        $q1GraphSizeUserShapes = collect($q1GraphSizeValues)->filter(function($item, $key) use($q1Sizelabels){
            return $q1Sizelabels->contains($key);
        })->map(function($item, $key) use($q1GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q1GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$item,
                    'y2' => 'g'.(collect($q1GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$item,
                    'cy' => 'g'.(collect($q1GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ]
            ];
        });
        $graphSettings['shape'] = $q1GraphSizeUserShapes->flatten(1)->values()->toArray();
        $graphSettings['axis_text_callback_y'] = function($value){
            return $value.'%';
        };
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q1GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values($q1GraphSizeValues);

        $q1SizeGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 1 – Specific size band response: areas of implementation</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        //Size band
        $q1Sizeheader = "You selected {$q1SizeAnswers->count()} implementation areas in the {$sizeKeys[$size]} sizeband: {$q1Sizelabels->implodeLast(', ',', and ')} <br/><br/>";
        $q1Sizebody = "";
        $q1Sizelabels->each(function($item, $key) use(&$q1Sizebody, $size, $sizeKeys, $sizeReference, $genericReference){
            if($sizeReference['q1'][$size][$key]<4){
                $q1Sizebody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. This shows your investment choices align with most organisations in {$sizeKeys[$size]} size band, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($sizeReference['q1'][$size][$key]>9){
                $q1Sizebody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. This suggests your investments differ from most organisations in {$sizeKeys[$size]} size band.<br/>";
            }
            if($sizeReference['q1'][$size][$key]<=9 && $sizeReference['q1'][$size][$key]>=4){
                $q1Sizebody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$sizeReference['q1'][$size][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q1Sizebody .= $genericReference['q1'][$key]."<br/><br/>";
        });
        $question1Size = $q1Sizeheader.$q1Sizebody;

        //question1Industry
        $q1Industryset = $industryReference['q1'][$industry];
        $q1IndustryAnswers = collect($answer)->only(array_keys($q1Industryset))->filter();
        $q1Industrylabels = collect($singleQuestions)->filter(function($item, $key) use($q1IndustryAnswers){
            return collect($q1IndustryAnswers->keys())->contains($key);                
        });

        //q1IndustryGraph
        $colours = [
            '#2279BC',
        ];
        $q1GraphIndustryValues = collect($industryGraphReference['q1'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q1GraphIndustryValues);
        $graphIndustryUserShapes = collect($q1GraphIndustryValues)->filter(function($item, $key) use($q1Industrylabels){
            return $q1Industrylabels->contains($key);
        })->map(function($item, $key) use($q1GraphIndustryValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q1GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$item,
                    'y2' => 'g'.(collect($q1GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#e8ae38',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$item,
                    'cy' => 'g'.(collect($q1GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e8ae38'
                ]
            ];
        });
        $graphSettings['shape'] = $graphIndustryUserShapes->flatten(1)->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q1GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values($q1GraphIndustryValues);

        $q1IndustryGraph = "
        <div class='block mb-2 pb'>
        	<span class='figure'>Figure 2 - Specific industry response: areas of implementation</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        //Industry
        $q1industryHeader = "You selected {$q1IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q1Industrylabels->implodeLast(', ',', and ')}<br/><br/>";
        $q1IndustryBody = "";
        $q1Industrylabels->each(function($item, $key) use(&$q1IndustryBody, $industry, $industryKeys, $industryReference, $genericReference){
            if($industryReference['q1'][$industry][$key]<4){
                $q1IndustryBody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. This shows your investment choices align with most organisations in {$industryKeys[$industry]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($industryReference['q1'][$industry][$key]>9){
                $q1IndustryBody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. This suggests your investments differ from most organisations in {$industryKeys[$industry]}.<br/>";
            }
            if($industryReference['q1'][$industry][$key]<=9 && $industryReference['q1'][$industry][$key]>=4){
                $q1IndustryBody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$industryReference['q1'][$industry][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q1IndustryBody .= $genericReference['q1'][$key]."<br/><br/>";
        });
        $question1Industry = $q1industryHeader.$q1IndustryBody;

        $q1question = '
        	<h3>Q1: In which of the following areas has your company implemented or does it plan to implement Big Data and analytics initiatives?</h3>
        ';
        $q1intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		This question shows the level of interest in Big Data Solutions, and which use cases are the ones that see the most implementations. The focus differs by size band and industry, and the charts below are for the specific size band and industries selected.
        	</p>
        ';

        $question1 = $q1question.$q1intro.$q1SizeGraph.$question1Size.$q1IndustryGraph.$question1Industry;

        //question2
        $q2question = "Put Question here";
        $q2intro = "Intro for question2";

        $q2Sizeset = $sizeReference['q2'][$size];
        $q2SizeAnswers = collect($answer)->only(array_keys($q2Sizeset))->filter();
        $q2Sizelabels = collect($singleQuestions)->filter(function($item, $key) use($q2SizeAnswers){
            return collect($q2SizeAnswers->keys())->contains($key);                
        });

        //q2SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q2GraphSizeValues = collect($sizeGraphReference['q2'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']*100];
        })->toArray();

        asort($q2GraphSizeValues);

        $q2GraphSizeUserShapes = collect($q2GraphSizeValues)->filter(function($item, $key) use($q2Sizelabels){
            return $q2Sizelabels->contains($key);
        })->map(function($item, $key) use($q2GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q2GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$item,
                    'y2' => 'g'.(collect($q2GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$item,
                    'cy' => 'g'.(collect($q2GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ]
            ];
        });
        $graphSettings['shape'] = $q2GraphSizeUserShapes->flatten(1)->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q2GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q2GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q2SizeGraph = "
        <div class='block mb-2 pb'>
        	<span class='figure'>Figure 3 - Specific size band response: Share of respondents adopting these business goals</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q2Sizeheader = "You selected {$q2SizeAnswers->count()} implementation areas in {$sizeKeys[$size]}: {$q2Sizelabels->implodeLast(', ',', and ')}<br/><br/>";

        $q2Sizebody = "";
        $q2Sizelabels->each(function($item, $key) use(&$q2Sizebody, $size, $sizeKeys, $sizeReference, $genericReference){
            if($sizeReference['q2'][$size][$key]<4){
                $q2Sizebody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. This shows your investment choices align with most organisations in {$sizeKeys[$size]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($sizeReference['q2'][$size][$key]>5){
                $q2Sizebody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. This suggests your investments differ from most organisations in {$sizeKeys[$size]}.<br/>";
            }
            if($sizeReference['q2'][$size][$key]<=5 && $sizeReference['q2'][$size][$key]>=4){
                $q2Sizebody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$sizeReference['q2'][$size][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q2Sizebody .= $genericReference['q2'][$key]."<br/><br/>";
        });

        $questionSize2 = $q2Sizeheader.$q2Sizebody;

        $q2Industryset = $industryReference['q2'][$industry];
        $q2IndustryAnswers = collect($answer)->only(array_keys($q2Industryset))->filter();
        $q2Industrylabels = collect($singleQuestions)->filter(function($item, $key) use($q2IndustryAnswers){
            return collect($q2IndustryAnswers->keys())->contains($key);                
        });

        //q2IndustryGraph
        $colours = [
            '#2279BC',
        ];
        $q2GraphIndustryValues = collect($industryGraphReference['q2'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']*100];
        })->toArray();

        asort($q2GraphIndustryValues);

        $q2GraphIndustryUserShapes = collect($q2GraphIndustryValues)->filter(function($item, $key) use($q2Industrylabels){
            return $q2Industrylabels->contains($key);
        })->map(function($item, $key) use($q2GraphIndustryValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q2GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$item,
                    'y2' => 'g'.(collect($q2GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#e8ae38',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$item,
                    'cy' => 'g'.(collect($q2GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e8ae38'
                ]
            ];
        });
        $graphSettings['shape'] = $q2GraphIndustryUserShapes->flatten(1)->values()->toArray();
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q2GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q2GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q2IndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 4 - Specific industry response: Share of respondents adopting these business goals</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q2Industryheader = "You selected {$q2IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q2Industrylabels->implodeLast(', ',', and ')}<br/><br/>";

        $q2Industrybody = "";
        $q2Industrylabels->each(function($item, $key) use(&$q2Industrybody, $industry, $industryKeys, $industryReference, $genericReference){
            if($industryReference['q2'][$industry][$key]<4){
                $q2Industrybody .= "<strong>{$item}</strong> is among the Top 3 implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. This shows your investment choices align with most organisations in {$industryKeys[$industry]}, and a suitable area for investment in Big Data Solutions.<br/>";
            }
            if($industryReference['q2'][$industry][$key]>5){
                $q2Industrybody .= "<strong>{$item}</strong> is among the Bottom 3 implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. This suggests your investments differ from most organisations in {$industryKeys[$industry]}.<br/>";
            }
            if($industryReference['q2'][$industry][$key]<=5 && $industryReference['q2'][$industry][$key]>=4){
                $q2Industrybody .= "<strong>{$item}</strong> is in the middle set of implementation areas and is ranked as <strong>{$industryReference['q2'][$industry][$key]}</strong>. Your investment criteria for Big Data investment focuses slightly outside mainstream investment areas, but still picks up on those areas with interest from some Big Data users.<br/>";
            }
            $q2Industrybody .= $genericReference['q2'][$key]."<br/><br/>";
        });

        $questionIndustry2 = $q2Industryheader.$q2Industrybody;

        $q2question = '
        	<h3>Q2 Which of the following business goals are driving adoption or consideration of Big Data and analytics in your organization?</h3>
        ';
        $q2intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		The second question looks at the driving factors, or business goals, that are to be addressed by Big Data solutions. This shows where the purpose lies with respondents within this size band and industry. 
        	</p>
        ';

        $question2 = $q2question.$q2intro.$q2SizeGraph.$questionSize2.$q2IndustryGraph.$questionIndustry2;

        //question4
        
        //$q4question = $singleQuestionsText->get($q4SizeLabels->keys()->first());
        $q4question = "Write question 4";
        $q4intro = "intro fro q4";

        $q4SizeSet = $sizeReference['q4'][$size];
        $q4SizeAnswers = collect($answer)->only(array_keys($q4SizeSet))->filter();
        $q4SizeAnswersSort = $q4SizeAnswers->sort()->reverse()->keys();
        $q4SizeAnswersRank = $this->rankArray($q4SizeAnswers->toArray());
        $q4SizeLabels = collect($singleQuestions)->filter(function($item, $key) use($q4SizeAnswers){
            return collect($q4SizeAnswers->keys())->contains($key);                
        });

        $q4Sizeheader = "You evaluated {$q4SizeAnswers->count()} implementation areas in the {$sizeKeys[$size]} size band: {$q4SizeLabels->implodeLast(', ',', and ')}<br/><br/>";

        //q4SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q4GraphSizeValues = collect($sizeGraphReference['q4'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();

        asort($q4GraphSizeValues);

        $q4SizeAnswersLabels = collect($sizeGraphReference['q4'][$size])->mapWithKeys(function($item, $key) use($q4SizeAnswers){
            return [$item['label'] => $q4SizeAnswers->get($key)];
        });

        $q4GraphSizeUserShapes = collect($q4GraphSizeValues)->map(function($item, $key) use($q4SizeAnswersLabels, $q4GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q4SizeAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q4SizeAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q4GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q4GraphSizeUserShapes->flatten(1)->toArray();
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;
        $graphSettings['axis_text_callback_y'] = function($value){
            if($value == 1) return "Not at all\n important";
            if($value == 2) return "Slightly\n important";
            if($value == 3) return "Moderately\n important";
            if($value == 4) return "Very\n important";
            if($value == 5) return "Extremely\n important";
        };
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q4GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q4GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q4SizeGraph = "
        <div class='block mb-2 pb'>
        	<span class='figure'>Figure 5 - Specific size band response: importance and ranking of KPIs</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q4Sizebody = "";
        $q4SizeLabels->each(function($item, $key) use(&$q4Sizebody, $size, $sizeKeys, $sizeReference, $genericReference, $q4SizeAnswers, $q4SizeAnswersSort, $q4SizeAnswersRank){
            $nth = $q4SizeAnswersRank[$key] == 1 ? 'most' : $this->ordinal($q4SizeAnswersRank[$key])." most";
            $q4Sizebody .= "<strong>{$item}</strong> is the <strong>{$nth}</strong> important of your Key Performance Indicators and";
            if($q4SizeAnswers[$key] < $sizeReference['q4'][$size][$key]){
                $q4Sizebody .= " you rated it below the average rating for all organisations in {$sizeKeys[$size]} <strong>({$sizeReference['q4'][$size][$key]})</strong>. This specific investment choice falls a little behind your peers, and you might want to consider increasing its importance within your priorities for Big Data Solutions.";
            }
            if($q4SizeAnswers[$key] > $sizeReference['q4'][$size][$key]){
                $q4Sizebody .= " you rated it the same as the average rating for all organisations in {$sizeKeys[$size]}, and this shows your views on <strong>{$item}</strong> are in line with those of the majority of other organisations.";
            }
            $q4Sizebody .= $genericReference['q4'][$key]."<br/><br/>";
        });

        $questionSize4 = $q4Sizeheader.$q4Sizebody;

        $q4IndustrySet = $industryReference['q4'][$industry];
        $q4IndustryAnswers = collect($answer)->only(array_keys($q4IndustrySet))->filter();
        $q4IndustryAnswersSort = $q4IndustryAnswers->sort()->reverse()->keys();
        $q4IndustryAnswersRank = $this->rankArray($q4IndustryAnswers->toArray());
        $q4IndustryLabels = collect($singleQuestions)->filter(function($item, $key) use($q4IndustryAnswers){
            return collect($q4IndustryAnswers->keys())->contains($key);                
        });

        $q4Industryheader = "You selected {$q4IndustryAnswers->count()} implementation areas in {$industryKeys[$industry]}: {$q4IndustryLabels->implodeLast(', ',', and ')}<br/><br/>";

        //q4IndustryGraph
        $colours = [
            '#287BB9',
        ];
        $q4GraphIndustryValues = collect($industryGraphReference['q4'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        asort($q4GraphIndustryValues);

        $q4IndustryAnswersLabels = collect($industryGraphReference['q4'][$industry])->mapWithKeys(function($item, $key) use($q4IndustryAnswers){
            return [$item['label'] => $q4IndustryAnswers->get($key)];
        });

        $q4GraphIndustryUserShapes = collect($q4GraphIndustryValues)->map(function($item, $key) use($q4IndustryAnswersLabels, $q4GraphIndustryValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q4GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q4IndustryAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q4GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#E6AD44',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q4IndustryAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q4GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#E6AD44'
                ],
            ];
        });

        $graphSettings['shape'] = $q4GraphIndustryUserShapes->flatten(1)->toArray();
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q4GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q4GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q4IndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 6 - Specific Industry response: importance and ranking of KPIs</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q4Industrybody = "";
        $q4IndustryLabels->each(function($item, $key) use(&$q4Industrybody, $industry, $industryKeys, $industryReference, $genericReference, $q4IndustryAnswers, $q4IndustryAnswersSort, $q4IndustryAnswersRank){
            $nth = $q4IndustryAnswersRank[$key] == 1 ? 'most' : $this->ordinal($q4IndustryAnswersRank[$key])." most";
            $q4Industrybody .= "<strong>{$item}</strong> is the <strong>{$nth}</strong> important of your Key Performance Indicators and";
            if($q4IndustryAnswers[$key] < $industryReference['q4'][$industry][$key]){
                $q4Industrybody .= " you rated it below the average rating for all organisations in {$industryKeys[$industry]} <strong>({$industryReference['q4'][$industry][$key]})</strong>. This specific investment choice falls a little behind your peers, and you might want to consider increasing its importance within your priorities for Big Data Solutions.";
            }
            if($q4IndustryAnswers[$key] > $industryReference['q4'][$industry][$key]){
                $q4Industrybody .= " you rated it the same as the average rating for all organisations in {$industryKeys[$industry]}, and this shows your views on <strong>{$item}</strong> are in line with those of the majority of other organisations.";
            }
            $q4Industrybody .= $genericReference['q4'][$key]."<br/><br/>";
        });

        $questionIndustry4 = $q4Industryheader.$q4Industrybody;
        $q4question = '
        	<h3>Q4. How important are the following business Key Performance Indicators (KPIs) for measuring the impact of your organization\'s Big Data and analytics efforts?</h3>
        ';
        $q4intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		Question 4 looks at business priorities in terms of the Key Performance Indicators, and positions your organisations business needs – as evaluated by the importance of these KPI’s.  
        	</p>
        ';
        $question4 = $q4question.$q4intro.$q4SizeGraph.$questionSize4.$q4IndustryGraph.$questionIndustry4;

        //question5
        $q4question = "Write question 5";
        $q4intro = "intro fro q5";
        $q5Answer = collect($answer)->only('q5')->first();

        //q5SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q5GraphSizeValues = collect($sizeGraphReference['q5'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q5GraphSizeValues);

        $q5GraphSizeKeys = collect($sizeGraphReference['q5'][$size])->mapWithKeys(function($item, $key){
            return [$item['label'] => $key];
        });
        $q5GraphSizeAnswerLabel =  $q5GraphSizeKeys->search($q5Answer);

        $q5GraphSizeUserShapes = collect($q5GraphSizeValues)->filter(function($item, $key) use($q5GraphSizeAnswerLabel){
            return $key == $q5GraphSizeAnswerLabel;
        })->map(function($item, $key) use($q5GraphSizeValues, $q5GraphSizeAnswerLabel){
            return [
                'line',
                'x1' => 'g0',
                'y1' => 'g'.(collect($q5GraphSizeValues)->keys()->search($q5GraphSizeAnswerLabel)+0.5),
                'x2' => 'gr',
                'y2' => 'g'.(collect($q5GraphSizeValues)->keys()->search($q5GraphSizeAnswerLabel)+0.5),
                'stroke-width' => 2,
                'stroke' => '#842573',
                'depth' => 'above',
            ];
        });
        $graphSettings['shape'] = $q5GraphSizeUserShapes->values()->toArray();
        $graphSettings['grid_division_h'] = 10;
        $graphSettings['axis_max_h'] = null;
        $graphSettings['axis_text_callback_y'] = function($value){
            return $value.'%';
        };
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q5GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q5GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q5SizeGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 7 - Specific size band response: level of benefits achieved so far</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q5Sizebody = "";
        
        if($q5Answer == 1){
            $q5Sizebody .= "Your expectations from using Big data solutions are considerably below that expected for organisations across all size bands, and also for organisations in the ";
        }
        if($q5Answer == 2){
            $q5Sizebody .= "Your expectations from using Big data solutions are  below that expected for organisations across all size bands, and also for organisations in the ";
        }
        if($q5Answer == 3){
            $q5Sizebody .= "Your expectations from using Big data solutions are a little lower than expected for organisations across all size bands, and also for organisations in the ";
        }
        if($q5Answer == 4){
            $q5Sizebody .= "Your expectations from using Big data solutions are similar to that expected for organisations across all size bands, and also for organisations in the ";
        }
        if($q5Answer == 5){
            $q5Sizebody .= "Your expectations from using Big data solutions are higher than that expected for organisations across all size bands, and also for organisations in the ";
        }
        $q5Sizebody .= "{$sizeKeys[$size]} size band.<br/>";
        $q5Sizebody .= "<strong>{$sizeReference['q5'][$size][$q5Answer]}</strong> of organisations in this size band gave a similar rating.<br/><br/>";

        $q5Sizebody .= $genericReference['q5']."<br/><br/>";

        $questionSize5 = $q5SizeGraph.$q5Sizebody;

        //q5IndustryGraph
        $colours = [
            '#2279BC',
        ];
        $q5GraphIndustryValues = collect($industryGraphReference['q5'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();
        asort($q5GraphIndustryValues);

        $q5GraphIndustryKeys = collect($industryGraphReference['q5'][$industry])->mapWithKeys(function($item, $key){
            return [$item['label'] => $key];
        });
        $q5GraphIndustryAnswerLabel =  $q5GraphIndustryKeys->search($q5Answer);

        $q5GraphIndustryUserShapes = collect($q5GraphIndustryValues)->filter(function($item, $key) use($q5GraphIndustryAnswerLabel){
            return $key == $q5GraphIndustryAnswerLabel;
        })->map(function($item, $key) use($q5GraphIndustryValues, $q5GraphIndustryAnswerLabel){
            return [
                'line',
                'x1' => 'g0',
                'y1' => 'g'.(collect($q5GraphIndustryValues)->keys()->search($q5GraphIndustryAnswerLabel)+0.5),
                'x2' => 'gr',
                'y2' => 'g'.(collect($q5GraphIndustryValues)->keys()->search($q5GraphIndustryAnswerLabel)+0.5),
                'stroke-width' => 2,
                'stroke' => '#E6AD44',
                'depth' => 'above',
            ];
        });
        $graphSettings['shape'] = $q5GraphIndustryUserShapes->values()->toArray();
        $graphSettings['grid_division_h'] = 10;
        $graphSettings['axis_max_h'] = null;
        $graphSettings['axis_text_callback_y'] = function($value){
            return $value.'%';
        };
        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q5GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q5GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q5IndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 8 - Specific industry response - levels of benefit achieved so far</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q5Industrybody = "";
        
        if($q5Answer == 1){
            $q5Industrybody .= "Your expectations from using Big data solutions are considerably below that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 2){
            $q5Industrybody .= "Your expectations from using Big data solutions are  below that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 3){
            $q5Industrybody .= "Your expectations from using Big data solutions are a little lower than expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 4){
            $q5Industrybody .= "Your expectations from using Big data solutions are similar to that expected for organisations across all industries, and also for organisations in ";
        }
        if($q5Answer == 5){
            $q5Industrybody .= "Your expectations from using Big data solutions are higher than that expected for organisations across all industries, and also for organisations in ";
        }
        $q5Industrybody .= "{$industryKeys[$industry]}.<br/>";
        $q5Industrybody .= "<strong>{$industryReference['q5'][$industry][$q5Answer]}</strong> of organisations in this industry gave a similar rating.<br/><br/>";

        $q5Industrybody .= $genericReference['q5']."<br/><br/>";

        $questionIndustry5 = $q5IndustryGraph.$q5Industrybody;
        $q5question = '
        	<h3>Q5. What level of benefits has your organisation achieved so far (alt: does your organisation expect to achieve) from the use of a Big Data and analytics environment?</h3>
        ';
        $q5intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		This question positions your expectation of business benefits against those for others in your industry and size band. It is possible that your expectations are significantly lower or higher than your peers, and the responses of your peers can align your expectations better.  
        	</p>
        ';
        $question5 = $q5question.$q5intro.$questionSize5.$questionIndustry5;

        //question6
        $q6aset = $industryReference['q6a'][$industry];
        $q6aAnswers = collect($answer)->only(array_keys($q6aset))->filter();
        $q6aAnswersRank = $this->rankArray($q6aAnswers->toArray());
        $q6alabels = collect($singleQuestions)->filter(function($item, $key) use($q6aAnswers){
            return collect($q6aAnswers->keys())->contains($key);                
        });

        $q6aquestion = $singleQuestionsText->get($q6alabels->keys()->first());
        $q6arankfirst = str_replace(" by", "", $q6alabels->get(collect(array_keys($q6aAnswersRank))->first()));
        $q6aranklast = str_replace(" by", "", $q6alabels->get(collect(array_keys($q6aAnswersRank))->last()));

        //q6aSizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q6GraphSizeValues = collect($sizeGraphReference['q6a'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        asort($q6GraphSizeValues);

        $q6aSizeAnswersLabels = collect($sizeGraphReference['q6a'][$size])->mapWithKeys(function($item, $key) use($q6aAnswers){
            return [$item['label'] => $q6aAnswers->get($key)];
        });

        $q6GraphSizeUserShapes = collect($q6GraphSizeValues)->map(function($item, $key) use($q6aSizeAnswersLabels, $q6GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q6GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q6aSizeAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q6GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q6aSizeAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q6GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q6GraphSizeUserShapes->flatten(1)->toArray();
        // $graphSettings['axis_text_callback_y'] = function($value){
        //     return $value.'%';
        // };
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = null;

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q6GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q6GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q6aSizeGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 9 - Specific size-band response: Actual benefits realised or expected.</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        //q6Size
        $q6aSizeaheader = "You expect your biggest gain in <strong>{$q6arankfirst}</strong> and your smallest gain in  <strong>{$q6aranklast}</strong> <br/>";

        $q6aSizebody = "";
        $q6alabels->each(function($item, $key) use(&$q6aSizebody, $size, $sizeKeys, $sizeReference, $genericReference, $q6aAnswers){
            $label = trim(str_replace(['Increased','Reduced','by'], ['','',''], $item));
            $q6aSizebody .= "For {$label} ";
            if($q6aAnswers[$key] > (3 * $sizeReference['q6a'][$size][$key])){
                $q6aSizebody .= "your expectations are much higher than the average for the {$sizeKeys[$size]} size band. This could be optimism on your part but you might want to look more carefully at your plans and business model.<br/>";
            }
            if($q6aAnswers[$key] > $sizeReference['q6a'][$size][$key]){
                $q6aSizebody .= "your expectations are higher than the average for the {$sizeKeys[$size]} size band, but not by an overly optimistic amount so you have either better plans or better expectations than your peers in size.<br/>";
            }
            if($q6aAnswers[$key] == $sizeReference['q6a'][$size][$key]){
                $q6aSizebody .= "your expectations are similar to the average for the {$sizeKeys[$size]} size band.<br/>";
            }
            if($q6aAnswers[$key] < ($sizeReference['q6a'][$size][$key]) / 3){
                $q6aSizebody .= "your expectations are much lower than the average for the {$sizeKeys[$size]} size band. You might want to reconsider your plans and review where you can make improvements in your expectations.<br/>";
            }
            if($q6aAnswers[$key] < $sizeReference['q6a'][$size][$key]){
                $q6aSizebody .= "your expectations are lower than the average for the {$sizeKeys[$size]} size band, but not by a significant amount. You could consider revising your planning, but you expecctations are generally in line with those of others in your industry.<br/>";
            }
        });
        $q6aSizebody .= "<br/>";

        $question6aSize = $q6aSizeGraph.$q6aSizeaheader.$q6aSizebody;

        //q6aIndustryGraph
        $colours = [
            '#287BB9',
        ];
        $q6GraphIndustryValues = collect($industryGraphReference['q6a'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        asort($q6GraphIndustryValues);

        $q6aIndustryAnswersLabels = collect($industryGraphReference['q6a'][$industry])->mapWithKeys(function($item, $key) use($q6aAnswers){
            return [$item['label'] => $q6aAnswers->get($key)];
        });

        $q6GraphIndustryUserShapes = collect($q6GraphIndustryValues)->map(function($item, $key) use($q6aIndustryAnswersLabels, $q6GraphIndustryValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q6GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q6aIndustryAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q6GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#E6AD44',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q6aIndustryAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q6GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#E6AD44'
                ],
            ];
        });

        $graphSettings['shape'] = $q6GraphIndustryUserShapes->flatten(1)->toArray();
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q6GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q6GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        
        $q6aIndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 10 - Specific industry response: Actual benefits realised or expected.</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        //q6aIndustry
        $q6aIndustryaheader = "You expect your biggest gain in <strong>{$q6arankfirst}</strong> and your smallest gain in  <strong>{$q6aranklast}</strong> <br/>";

        $q6aIndustrybody = "";
        $q6alabels->each(function($item, $key) use(&$q6aIndustrybody, $industry, $industryKeys, $industryReference, $genericReference, $q6aAnswers){
            $label = trim(str_replace(['Increased','Reduced','by'], ['','',''], $item));
            $q6aIndustrybody .= "For {$label} ";
            if($q6aAnswers[$key] > (3 * $industryReference['q6a'][$industry][$key])){
                $q6aIndustrybody .= "your expectations are much higher than the average for {$industryKeys[$industry]}. This could be optimism on your part but you might want to look more carefully at your plans and business model.<br/>";
            }
            if($q6aAnswers[$key] > $industryReference['q6a'][$industry][$key]){
                $q6aIndustrybody .= "your expectations are higher than the average for {$industryKeys[$industry]}, but not by an overly optimistic amount so you have either better plans or better expectations than your peers in industry.<br/>";
            }
            if($q6aAnswers[$key] == $industryReference['q6a'][$industry][$key]){
                $q6aIndustrybody .= "your expectations are similar to the average for {$industryKeys[$industry]}.<br/>";
            }
            if($q6aAnswers[$key] < ($industryReference['q6a'][$industry][$key]) / 3){
                $q6aIndustrybody .= "your expectations are much lower than the average for {$industryKeys[$industry]}. You might want to reconsider your plans and review where you can make improvements in your expectations.<br/>";
            }
            if($q6aAnswers[$key] < $industryReference['q6a'][$industry][$key]){
                $q6aIndustrybody .= "your expectations are lower than the average for {$industryKeys[$industry]}, but not by a significant amount. You could consider revising your planning, but you expecctations are generally in line with those of others in your industry.<br/>";
            }
        });
        $q6aIndustrybody .= "<br/>";

        $question6aIndustry = $q6aIndustryGraph.$q6aIndustryaheader.$q6aIndustrybody;

        $q6aquestion = '
        	<h3>Q6. In percentage terms, what is the actual benefit realised (alt: what benefit do you expect to realise) from the use of Big Data and analytics for the following business KPIs?</h3>
        ';
        $q6aintro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		Question 6 helps you align specifically what you expect for profit, cost, and revenue against that expected by your peers in the same industry and company size band as your company. If your expectations fall below those of your peers then you have an opportunity to be more optimistic about the value you can expect to gain from your Big Data implementation. Alternatively, if you have high expectations for your return on investment, well beyond those of your peers, then you might want to reconsider the scope or scale of your project in the light of the experience of others. 
        	</p>
        ';

        $question6a = $q6aquestion.$q6aintro.$question6aSize.$question6aIndustry;

        //question7
        $q7set = $industryReference['q7'][$industry];
        $q7Answers = collect($answer)->only(array_keys($q7set))->filter();
        $q7labels = collect($singleQuestions)->filter(function($item, $key) use($q7Answers){
            return collect($q7Answers->keys())->contains($key);                
        });

        $q7question = $singleQuestionsText->get($q7labels->keys()->first());

        //q7SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q7GraphSizeValues = collect($sizeGraphReference['q7'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        asort($q7GraphSizeValues);

        $q7SizeAnswersLabels = collect($sizeGraphReference['q7'][$size])->mapWithKeys(function($item, $key) use($q7Answers){
            return [$item['label'] => $q7Answers->get($key)];
        });

        $q7GraphSizeUserShapes = collect($q7GraphSizeValues)->map(function($item, $key) use($q7SizeAnswersLabels, $q7GraphSizeValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q7GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q7SizeAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q7GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q7SizeAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q7GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q7GraphSizeUserShapes->flatten(1)->toArray();
        $graphSettings['axis_text_callback_y'] = function($value){
            if($value == 0) return "";
            if($value == 1) return "Decrease";
            if($value == 2) return "No\n Change";
            if($value == 3) return "Slight\n Increase";
            if($value == 4) return "Moderate\n Increase";
            if($value == 5) return "High\n Increase";
        };
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q7GraphSizeValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q7GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q7SizeGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 11 - Specific size-band response: impact on ability to achieve specific KPIs</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q7Sizebody = "";
        $q7labels->each(function($item, $key) use(&$q7Sizebody, $size, $sizeKeys, $sizeReference, $genericReference, $q7Answers){
            $q7Sizebody .= "You rated the impact of <strong>{$item}</strong>";
            if($q7Answers->get($key) < $sizeReference['q7'][$size][$key]-1){
                $q7Sizebody .= " much lower ";
            }
            if($q7Answers->get($key) == $sizeReference['q7'][$size][$key]){
                $q7Sizebody .= " similar to ";
            }
            if($q7Answers->get($key) > $sizeReference['q7'][$size][$key]){
                $q7Sizebody .= " higher than ";
            }
            if($q7Answers->get($key) > $sizeReference['q7'][$size][$key]+1){
                $q7Sizebody .= " much higher than ";
            }
            $q7Sizebody .= " the average rating given by organisations in the {$sizeKeys[$size]} size band.<br/>";
            if($q7Answers->get($key) == 1){
                $q7Sizebody .= "It is unusual for Big Data deloyments to result in an negative impact, so it would be worth investigating why you think this is the case. Causes for a negative impact can include changes to scope throughout the deployment and careful project management can reduce unnecessary scope creep.";
            }
            if($q7Answers->get($key) == 2){
                $q7Sizebody .= "While you see or anticipate that a big data solution made no change to your achivement of your <strong>{$item}</strong> performance indicator, is it still worth continuing to adopt Big Data solutions because of their future impact in other areas - as most organisations have seen a slight or moderate increase in their KPIs with these solutions";
            }
            if($q7Answers->get($key) == 3){
                $q7Sizebody .= "Most organisations anticipate either a slight or moderate increase so your expecations or actual achivement for <strong>{$item}</strong> are consistent with the majority of organisations. ";
            }
            if($q7Answers->get($key) == 4){
                $q7Sizebody .= "While most organisations anticipate a slight or moderate Increase, your expectations or achivement for <strong>{$item}</strong> are a little higher than most. This is a realistic outcome and shows the value of implementing a Big Data solution.";
            }
            if($q7Answers->get($key) == 5){
                $q7Sizebody .= "Your achivement or expectation of a high increase in your ability to achive your <strong>{$item}</strong> puts you ahead of most organisations, and emphasises the value of implenting a Big Data solution for this KPI";
            }
            $q7Sizebody .= "<br/>".$genericReference['q7'][$key]."<br/><br/>";
        });

        $question7Size = $q7SizeGraph.$q7Sizebody;

        //q7IndustryGraph
        $colours = [
            '#287BB9',
        ];
        $q7GraphIndustryValues = collect($industryGraphReference['q7'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        asort($q7GraphIndustryValues);

        $q7IndustryAnswersLabels = collect($industryGraphReference['q7'][$industry])->mapWithKeys(function($item, $key) use($q7Answers){
            return [$item['label'] => $q7Answers->get($key)];
        });

        $q7GraphIndustryUserShapes = collect($q7GraphIndustryValues)->map(function($item, $key) use($q7IndustryAnswersLabels, $q7GraphIndustryValues){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q7GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.($q7IndustryAnswersLabels->get($key)),
                    'y2' => 'g'.(collect($q7GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#E6AD44',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($q7IndustryAnswersLabels->get($key)),
                    'cy' => 'g'.(collect($q7GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#E6AD44'
                ],
            ];
        });

        $graphSettings['shape'] = $q7GraphIndustryUserShapes->flatten(1)->toArray();
        $graphSettings['axis_text_callback_y'] = function($value){
            if($value == 0) return "";
            if($value == 1) return "Decrease";
            if($value == 2) return "No\n Change";
            if($value == 3) return "Slight\n Increase";
            if($value == 4) return "Moderate\n Increase";
            if($value == 5) return "High\n Increase";
        };
        $graphSettings['grid_division_h'] = 1;
        $graphSettings['axis_max_h'] = 5;

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q7GraphIndustryValues)->count()*45+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q7GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 35, "\n", false) => $item];
        })->toArray());

        $q7IndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 12 - specific industry response: Impact on ability to achieve specific KPIs</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";

        $q7Industrybody = "";
        $q7labels->each(function($item, $key) use(&$q7Industrybody, $industry, $industryKeys, $industryReference, $genericReference, $q7Answers){
            $q7Industrybody .= "You rated the impact of <strong>{$item}</strong>";
            if($q7Answers->get($key) < $industryReference['q7'][$industry][$key]-1){
                $q7Industrybody .= " much lower ";
            }
            if($q7Answers->get($key) == $industryReference['q7'][$industry][$key]){
                $q7Industrybody .= " similar to ";
            }
            if($q7Answers->get($key) > $industryReference['q7'][$industry][$key]){
                $q7Industrybody .= " higher than ";
            }
            if($q7Answers->get($key) > $industryReference['q7'][$industry][$key]+1){
                $q7Industrybody .= " much higher than ";
            }
            $q7Industrybody .= " the average rating given by organisations in {$industryKeys[$industry]}.<br/>";
            if($q7Answers->get($key) == 1){
                $q7Industrybody .= "It is unusual for Big Data deloyments to result in an negative impact, so it would be worth investigating why you think this is the case. Causes for a negative impact can include changes to scope throughout the deployment and careful project management can reduce unnecessary scope creep.";
            }
            if($q7Answers->get($key) == 2){
                $q7Industrybody .= "While you see or anticipate that a big data solution made no change to your achivement of your <strong>{$item}</strong> performance indicator, is it still worth continuing to adopt Big Data solutions because of their future impact in other areas - as most organisations have seen a slight or moderate increase in their KPIs with these solutions";
            }
            if($q7Answers->get($key) == 3){
                $q7Industrybody .= "Most organisations anticipate either a slight or moderate increase so your expecations or actual achivement for <strong>{$item}</strong> are consistent with the majority of organisations. ";
            }
            if($q7Answers->get($key) == 4){
                $q7Industrybody .= "While most organisations anticipate a slight or moderate Increase, your expectations or achivement for <strong>{$item}</strong> are a little higher than most. This is a realistic outcome and shows the value of implementing a Big Data solution.";
            }
            if($q7Answers->get($key) == 5){
                $q7Industrybody .= "Your achivement or expectation of a high increase in your ability to achive your <strong>{$item}</strong> puts you ahead of most organisations, and emphasises the value of implenting a Big Data solution for this KPI";
            }
            $q7Industrybody .= $genericReference['q7'][$key]."<br/><br/>";
        });

        $question7Industry = $q7IndustryGraph.$q7Industrybody;

        $q7question = '
        	<h3>Q7. To what extent has your organisation\'s deployment of Big Data and analytics impacted (alt: will your organisation\'s deployment ...  be impacted) by the ability to attain the following business KPIs?</h3>
        ';
        $q7intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		Good business performance is driven by performance indicators, and the purpose of your big data project will be to improve your performance as measured by these indicators. Question 7 shows how your peers view the different KPI’s and sets a reference point against which you can align your expected improvement in each of the KPI’s.
        	</p>
        ';

        $question7 = $q7question.$q7intro.$question7Size.$question7Industry;


        //question8
        
        $q8set = $industryReference['q8'][$industry];

        $q8Answers = collect($answer)->only(array_keys($q8set))->filter();

        $q8labels = collect($singleQuestions)->filter(function($item, $key) use($q8Answers){
            return collect($q8Answers->keys())->contains($key);                
        });

        $q8question = $singleQuestionsText->get($q8labels->keys()->first());

        //q8SizeGraph
        $colours = [
            '#E5E5E5','#CCCCCC','#808087','#D9E89C','#ACCB32','#8EBF3F','#4D4D57'
        ];
        $q8GraphSizeValues = collect($sizeGraphReference['q8'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        //asort($q8GraphSizeValues);

        $q8SizeAnswersLabels = collect($sizeGraphReference['q8'][$size])->mapWithKeys(function($item, $key) use($q8Answers){
            return [$item['label'] => $q8Answers->get($key)];
        });


        $q8SizeAnswersLabelsPercentages = $q8SizeAnswersLabels->mapWithKeys(function($item,$key) use($q8AnswerKey){
            return [$key => $q8AnswerKey->get($item)];
        });

        $q8GraphSizeUserShapes = $q8SizeAnswersLabelsPercentages->map(function($item, $key) use($size, $q8SourceData){
            $sectionRef = collect($q8SourceData[$size])->get($item);
            $gKey = collect($sectionRef)->keys()->search($key);

            $section = collect($q8SourceData[$size]);

            $totalToNow = 0;
            $section->each(function ($cenItem, $cenKey) use($key,$item, &$totalToNow) {
                if($cenKey == $item){
                    $totalToNow += $cenItem[$key]/2;
                    return false;
                }
                $totalToNow += $cenItem[$key];
            });

            return [
                [
                    'line',
                    'x1' => 'g'.($gKey+0.5),
                    'y1' => 'g0',
                    'x2' => 'g'.($gKey+0.5),
                    'y2' => 'g'.$totalToNow,
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($gKey+0.5),
                    'cy' => 'g'.$totalToNow,
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });


        $graphSettings['shape'] = $q8GraphSizeUserShapes->flatten(1)->values()->toArray();
        $graphSettings['axis_text_callback_y'] = function($value){
            return "{$value}%";
        };
        $graphSettings['pad_right'] = 85;
        $graphSettings['grid_division_v'] = 10;
        $graphSettings['axis_max_h'] = null;
        $graphSettings['bar_space'] = 20;
        $graphSettings['axis_max_v'] = 100;
        $graphSettings['legend_entries'] = array(
            '0%',
            '< 5%',
            '5%-9%',
            '10%-24%',
            '25%-49%',
            '50%+',
            'Dont know'
        );
        $graphSettings['legend_position'] = "outer right 0 40";
        $graphSettings['legend_stroke_width'] = 0;
        $graphSettings['legend_shadow_opacity'] = 0;
        $graphSettings['legend_text_side'] = "left";

        $graph = new \Goat1000\SVGGraph\SVGGraph(collect($q8GraphSizeValues)->count()*90+20, 500, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q8SourceData[$size])->map(function($item, $key){
            return collect($item)->mapWithKeys(function($itemItem, $keykey){
                return [wordwrap($keykey, 20, "\n", false) => $itemItem];
            });
        })->toArray());

        $q8SizeGraph = "
        <div class='block mb-2 pb'>
        	<span class='figure'>Figure 13 - Specific size band response: Expected improvement due to the adoption of Big Data Solutions</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('StackedBarGraph', false)}
        </div>";

        $sortedq8Answers = $q8Answers->toArray();
        ksort($sortedq8Answers);
        $sortedq8Answers = collect($sortedq8Answers);


        $q8labels->each(function($item, $key) use(&$q8Sizebody, $size, $sizeKeys, $sizeReference, $genericReference, $q8Answers, $q8AnswerKey, $q8TotalResponses, $sortedq8Answers){

            if($item == 'Cost reduction'){
                $q8Sizebody .= "Your expectation of improvement associated with the implementation of a Big Data solution for {$item}, at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Time efficiency'){
                $q8Sizebody .= "Your anticipated improvement for {$item}, at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Product/service quality'){
                $q8Sizebody .= "You expect a {$q8AnswerKey->get($q8Answers->get($key))} improvement for your ".$item." solution, and this is ";
            }
            if($item == 'Revenue growth'){
                $q8Sizebody .= "Your improvement expectation associated with your Big Data solution for ".$item.", at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Customer satisfaction'){
                $q8Sizebody .= "Your expected {$q8AnswerKey->get($q8Answers->get($key))} improvement for ".$item." is ";
            }
            if($item == 'Business model innovation'){
                $q8Sizebody .= "You expect an improvement of {$q8AnswerKey->get($q8Answers->get($key))} for your ".$item." solution and this is ";
            }
            if($item == 'Number of new products/services launched'){
                $q8Sizebody .= "Your expectation of improvement associated with the implementation of a Big Data solution for ".$item.", at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }

            if($q8Answers->get($key) < ($sizeReference['q8'][$size][$key]-1)){
                $q8Sizebody .= "much lower than the average rating given by organisations in {$sizeKeys[$size]}.";
            }
            if($q8Answers->get($key) < $sizeReference['q8'][$size][$key]){
                $q8Sizebody .= "lower than the average rating for organisations in {$sizeKeys[$size]}.";
            }
            if($q8Answers->get($key) == $sizeReference['q8'][$size][$key]){
                $q8Sizebody .= "Similar to the average rating given by {$sizeKeys[$size]} organisations.";
            }
            if($q8Answers->get($key) > $sizeReference['q8'][$size][$key]+1){
                $q8Sizebody .= "much higher than the {$sizeKeys[$size]} average.";
            }
            if($q8Answers->get($key) > $sizeReference['q8'][$size][$key]){
                $q8Sizebody .= "higher than the average rating given by {$sizeKeys[$size]} organisations.";
            }

            $q8Sizebody .= "<br/><br/>";

            $upto = [];
            $sortedq8Answers->each(function($answerItem, $answerKey) use(&$upto, $key){
                $upto[] = $answerItem;
                if($answerKey == $key){
                    return false;
                }
            });

            $numberOfAnswered = collect($upto)->filter(function($sortedItem, $sortedKey) use($q8Answers, $key){
                return $sortedItem == $q8Answers->get($key);
            });

            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()==1){
                $q8Sizebody .= "It is unusual to implement a big data solution and not expect some improvements in {$item} because the purpose of implementing transformation solutions is to reap significant benefits. If you have no improvement expectations across all KPIs then you might want to reconsider your transformation project. However, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected a 0% improvement.";
            }
            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()==2){
                $q8Sizebody .= "Most organisations expect some improvements in {$item}:  implementing transformation solutions is to improve performance. If your improvement expectations for all KPIs are low then you might want to reconsider your transformation project. {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected no improvement. ";
            }
            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()>2){
                $q8Sizebody .= "The purpose of implementing a digital transformation solution is to improve the performance indicator being adressed, in this case, {$item}. So it is exceptional not to expect some level of improvement. If you do not expect any improvement across all KPIs then you might want to reconsider your transformation project. However, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected a 0% improvement.";
            }

            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()==1){
                $q8Sizebody .= " While this is a low expectation, any improvement is positive, and  {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation of as much as 5% improvement in {$item} when adopting a Big Data solution.";
            }
            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()==2){
                $q8Sizebody .= "Although low, any improvement can be considered a good improvement if it is positive, and  {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation of up to 5% improvement in {$item} as a result of adopting a Big Data solution.";
            }
            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()>2){
                $q8Sizebody .= "While this is low, any improvement is a good improvement, and {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation up to 5% improvement in {$item} from their Big Data solution.";
            }

            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()==1){
                $q8Sizebody .= " Close to half of organisations expect to see an improvement of between 5% and 25% from their Big Data implementation. For a 5%-9% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations fell into this band.";
            }
            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()==2){
                $q8Sizebody .= "Around half of all organisations expect an improvement of between 5% and 25% as a result of adopting Big Data solutions. For a 5%-9% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect gains within this range.";
            }
            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()>2){
                $q8Sizebody .= "For all organisations, about half expect an improvement of between 5% and 25% when adopting a Big Data implementation. {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect an improvement of 5%-9% in {$item} in 2020. ";
            }

            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()==1){
                $q8Sizebody .= "Organisations expecting an improvement of between 5% and 25% from their Big Data solution account for about half of all organisations. For {$item} in 2020 in {$sizeKeys[$size]}, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} expect an improvement of between 10% and 25%.";
            }
            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()==2){
                $q8Sizebody .= "Around half of all organisations expect an improvement of between 5% and 25% as a result of adopting Big Data solutions. For those expecting 10%-24% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations fell into this band.";
            }
            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()>2){
                $q8Sizebody .= "Close to half of all organisations expect an improvement of between 5% and 25% from their Big Data implementation. For a 10%-24% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected this level of improvement.";
            }

            if($q8Answers->get($key) == 5){
                $q8Sizebody .= "A 25%-49% improvement in {$item} is a significant improvement: fewer than {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect this level of improvement specifically in {$item}. Your achivement or expectation of a high increase in your ability to achive your {$item} KPI puts you ahead of most organisations, and emphasises the value of implementing a Big Data solution. ";
            }

            if($q8Answers->get($key) == 6){
                $q8Sizebody .= "More than 50%  improvement in {$item} puts your expected gains in the top {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations. This is a very significant improvement in performance for {$item} and clearly shows how adopting a Big Data solution can make your organisation much more competitive. This should contribute  very notably to transformation of your organistion. ";
            }
        });
        $question8Size =  $q8SizeGraph.$q8Sizebody;

        //q8IndustryGraph
        $colours = [
            '#E5E5E5','#CCCCCC','#808087','#B1DAF5','#54A4E2','#2279BC','#4D4D57'
        ];
        $q8GraphIndustryValues = collect($industryGraphReference['q8'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();


        //asort($q8GraphIndustryValues);

        $q8IndustryAnswersLabels = collect($industryGraphReference['q8'][$industry])->mapWithKeys(function($item, $key) use($q8Answers){
            return [$item['label'] => $q8Answers->get($key)];
        });


        $q8IndustryAnswersLabelsPercentages = $q8IndustryAnswersLabels->mapWithKeys(function($item,$key) use($q8AnswerKey){
            return [$key => $q8AnswerKey->get($item)];
        });

        $q8GraphIndustryUserShapes = $q8IndustryAnswersLabelsPercentages->map(function($item, $key) use($industry, $q8SourceData){
            $sectionRef = collect($q8SourceData[$industry])->get($item);
            $gKey = collect($sectionRef)->keys()->search($key);

            $section = collect($q8SourceData[$industry]);

            $totalToNow = 0;
            $section->each(function ($cenItem, $cenKey) use($key,$item, &$totalToNow) {
                if($cenKey == $item){
                    $totalToNow += $cenItem[$key]/2;
                    return false;
                }
                $totalToNow += $cenItem[$key];
            });

            return [
                [
                    'line',
                    'x1' => 'g'.($gKey+0.5),
                    'y1' => 'g0',
                    'x2' => 'g'.($gKey+0.5),
                    'y2' => 'g'.$totalToNow,
                    'stroke-width' => 2,
                    'stroke' => '#e8ae38',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.($gKey+0.5),
                    'cy' => 'g'.$totalToNow,
                    'r' => 10,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#e8ae38'
                ],
            ];
        });


        $graphSettings['shape'] = $q8GraphIndustryUserShapes->flatten(1)->values()->toArray();
        $graphSettings['axis_text_callback_y'] = function($value){
            return "{$value}%";
        };

        $graph = new \Goat1000\SVGGraph\SVGGraph(collect($q8GraphIndustryValues)->count()*90+20, 500, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q8SourceData[$industry])->map(function($item, $key){
            return collect($item)->mapWithKeys(function($itemItem, $keykey){
                return [wordwrap($keykey, 20, "\n", false) => $itemItem];
            });
        })->toArray());

        $q8IndustryGraph = "
        <div class='block mb-2 pb'>
        	<span class='figure'>Figure 14 - Specific industry response: Expected improvement due to the adoption of Big Data Solutions</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('StackedBarGraph', false)}
        </div>";

        $sortedq8Answers = $q8Answers->toArray();
        ksort($sortedq8Answers);
        $sortedq8Answers = collect($sortedq8Answers);


        $q8labels->each(function($item, $key) use(&$q8Industrybody, $industry, $industryKeys, $industryReference, $genericReference, $q8Answers, $q8AnswerKey, $q8TotalResponses, $sortedq8Answers){

            if($item == 'Cost reduction'){
                $q8Industrybody .= "Your expectation of improvement associated with the implementation of a Big Data solution for {$item}, at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Time efficiency'){
                $q8Industrybody .= "Your anticipated improvement for {$item}, at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Product/service quality'){
                $q8Industrybody .= "You expect a {$q8AnswerKey->get($q8Answers->get($key))} improvement for your ".$item." solution, and this is ";
            }
            if($item == 'Revenue growth'){
                $q8Industrybody .= "Your improvement expectation associated with your Big Data solution for ".$item.", at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }
            if($item == 'Customer satisfaction'){
                $q8Industrybody .= "Your expected {$q8AnswerKey->get($q8Answers->get($key))} improvement for ".$item." is ";
            }
            if($item == 'Business model innovation'){
                $q8Industrybody .= "You expect an improvement of {$q8AnswerKey->get($q8Answers->get($key))} for your ".$item." solution and this is ";
            }
            if($item == 'Number of new products/services launched'){
                $q8Industrybody .= "Your expectation of improvement associated with the implementation of a Big Data solution for ".$item.", at {$q8AnswerKey->get($q8Answers->get($key))}, is ";
            }

            if($q8Answers->get($key) < ($industryReference['q8'][$industry][$key]-1)){
                $q8Industrybody .= "much lower than the average rating given by organisations in {$industryKeys[$industry]}.";
            }
            if($q8Answers->get($key) < $industryReference['q8'][$industry][$key]){
                $q8Industrybody .= "lower than the average rating for organisations in {$industryKeys[$industry]}.";
            }
            if($q8Answers->get($key) == $industryReference['q8'][$industry][$key]){
                $q8Industrybody .= "Similar to the average rating given by {$industryKeys[$industry]} organisations.";
            }
            if($q8Answers->get($key) > $industryReference['q8'][$industry][$key]+1){
                $q8Industrybody .= "much higher than the {$industryKeys[$industry]} average.";
            }
            if($q8Answers->get($key) > $industryReference['q8'][$industry][$key]){
                $q8Industrybody .= "higher than the average rating given by {$industryKeys[$industry]} organisations.";
            }

            $q8Industrybody .= "<br/><br/>";

            $upto = [];
            $sortedq8Answers->each(function($answerItem, $answerKey) use(&$upto, $key){
                $upto[] = $answerItem;
                if($answerKey == $key){
                    return false;
                }
            });

            $numberOfAnswered = collect($upto)->filter(function($sortedItem, $sortedKey) use($q8Answers, $key){
                return $sortedItem == $q8Answers->get($key);
            });

            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()==1){
                $q8Industrybody .= "It is unusual to implement a big data solution and not expect some improvements in {$item} because the purpose of implementing transformation solutions is to reap significant benefits. If you have no improvement expectations across all KPIs then you might want to reconsider your transformation project. However, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected a 0% improvement.";
            }
            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()==2){
                $q8Industrybody .= "Most organisations expect some improvements in {$item}:  implementing transformation solutions is to improve performance. If your improvement expectations for all KPIs are low then you might want to reconsider your transformation project. {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected no improvement. ";
            }
            if($q8Answers->get($key) == 1 && $numberOfAnswered->count()>2){
                $q8Industrybody .= "The purpose of implementing a digital transformation solution is to improve the performance indicator being adressed, in this case, {$item}. So it is exceptional not to expect some level of improvement. If you do not expect any improvement across all KPIs then you might want to reconsider your transformation project. However, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected a 0% improvement.";
            }

            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()==1){
                $q8Industrybody .= " While this is a low expectation, any improvement is positive, and  {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation of as much as 5% improvement in {$item} when adopting a Big Data solution.";
            }
            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()==2){
                $q8Industrybody .= "Although low, any improvement can be considered a good improvement if it is positive, and  {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation of up to 5% improvement in {$item} as a result of adopting a Big Data solution.";
            }
            if($q8Answers->get($key) == 2 && $numberOfAnswered->count()>2){
                $q8Industrybody .= "While this is low, any improvement is a good improvement, and {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations reported an expectation up to 5% improvement in {$item} from their Big Data solution.";
            }

            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()==1){
                $q8Industrybody .= " Close to half of organisations expect to see an improvement of between 5% and 25% from their Big Data implementation. For a 5%-9% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations fell into this band.";
            }
            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()==2){
                $q8Industrybody .= "Around half of all organisations expect an improvement of between 5% and 25% as a result of adopting Big Data solutions. For a 5%-9% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect gains within this range.";
            }
            if($q8Answers->get($key) == 3 && $numberOfAnswered->count()>2){
                $q8Industrybody .= "For all organisations, about half expect an improvement of between 5% and 25% when adopting a Big Data implementation. {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect an improvement of 5%-9% in {$item} in 2020. ";
            }

            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()==1){
                $q8Industrybody .= "Organisations expecting an improvement of between 5% and 25% from their Big Data solution account for about half of all organisations. For {$item} in 2020 in {$industryKeys[$industry]}, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} expect an improvement of between 10% and 25%.";
            }
            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()==2){
                $q8Industrybody .= "Around half of all organisations expect an improvement of between 5% and 25% as a result of adopting Big Data solutions. For those expecting 10%-24% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations fell into this band.";
            }
            if($q8Answers->get($key) == 4 && $numberOfAnswered->count()>2){
                $q8Industrybody .= "Close to half of all organisations expect an improvement of between 5% and 25% from their Big Data implementation. For a 10%-24% improvement in {$item} in 2020, {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expected this level of improvement.";
            }

            if($q8Answers->get($key) == 5){
                $q8Industrybody .= "A 25%-49% improvement in {$item} is a significant improvement: fewer than {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations expect this level of improvement specifically in {$item}. Your achivement or expectation of a high increase in your ability to achive your {$item} KPI puts you ahead of most organisations, and emphasises the value of implementing a Big Data solution. ";
            }

            if($q8Answers->get($key) == 6){
                $q8Industrybody .= "More than 50%  improvement in {$item} puts your expected gains in the top {$q8TotalResponses[$item][$q8AnswerKey->get($q8Answers->get($key))]} of all organisations. This is a very significant improvement in performance for {$item} and clearly shows how adopting a Big Data solution can make your organisation much more competitive. This should contribute  very notably to transformation of your organistion. ";
            }
        });
        $question8Industry =  $q8IndustryGraph.$q8Industrybody;

        $q8question = '
        	<h3>Q8. For the following business KPIs please estimate what percentage of expected improvement will be linked to the adoption of Big Data and analytics in 2020?</h3>
        ';
        $q8intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		While Question 7 looks for overall improvements in business performance, as measured by the appropriate Key Performance Indicator, Question 8 places an actual value of improvement. This data shows the range of expectations from your peers, and provides a check on your specific expected performance improvement out to 2020.
        	</p>
        ';

        $question8 = $q8question.$q8intro.$question8Size.$question8Industry;

        //question 9
        $q9question = "Put Question here";
        $q9intro = "Intro for question2";

        $q9Sizeset = $sizeReference['q9'][$size];
        $q9SizeAnswers = collect($answer)->only(array_keys($q9Sizeset))->filter();


        $q9SizeAnswerlabels = collect($singleQuestions)->filter(function($item, $key) use($q9SizeAnswers){
            return collect($q9SizeAnswers->keys())->contains($key);                
        });

        //q9SizeGraph
        $colours = [
            '#c6dd64',
        ];
        $q9GraphSizeValues = collect($sizeGraphReference['q9'][$size])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->toArray();

        asort($q9GraphSizeValues);

        $q9GraphSizeUserShapes = collect($q9GraphSizeValues)->filter(function($item, $key) use($q9SizeAnswerlabels){
            return $q9SizeAnswerlabels->contains($key);
        })->map(function($item, $key) use($q9GraphSizeValues, $q9SizeAnswers, $q9SizeAnswerlabels){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q9GraphSizeValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$q9SizeAnswers->get($q9SizeAnswerlabels->search($key)),
                    'y2' => 'g'.(collect($q9GraphSizeValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$q9SizeAnswers->get($q9SizeAnswerlabels->search($key)),
                    'cy' => 'g'.(collect($q9GraphSizeValues)->keys()->search($key)+0.5),
                    'r' => 8,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q9GraphSizeUserShapes->flatten(1)->values()->toArray();

        $graphSettings['grid_division_h'] = 1;
        $graphSettings['grid_division_v'] = null;
        $graphSettings['axis_max_h'] = 5;
        $graphSettings['bar_space'] = 5;
        $graphSettings['axis_max_v'] = null;
        $graphSettings['axis_max_h'] = 4;
        $graphSettings['pad_right'] = 20;
        $graphSettings['legend_entries'] = null;
        $graphSettings['axis_text_callback_y'] = function($value){
            if($value == 1) return "Using or\n implementing";
            if($value == 2) return "Evaluating or\n planning";
            if($value == 3) return "Interested,\n but no plans";
            if($value == 4) return "Not interested\n and no plans";
        };

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q9GraphSizeValues)->count()*25+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q9GraphSizeValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 40, "\n", false) => $item];
        })->toArray());

        $q9SizeGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 15 - Specific size-band response: Business Use Case position</span>
        	<div class='sizegraph'>
        		{$sizeKeys[$size]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";
        //{$q9SizeAnswerlabels->implodeLast(', ',', and ')}
        $plaEvaUseImp = $q9SizeAnswers->filter(function($item){
            return $item < 3 && $item > 0;
        });
        $plaEvaUseImpTopTen = $plaEvaUseImp->filter(function($item,$key) use($sizeReference, $size){
            return $sizeReference['q9'][$size][$key] < 11;
        });

        $plaEvaUseImpTopTenLabels = collect($singleQuestions)->filter(function($item, $key) use($plaEvaUseImpTopTen){
            return collect($plaEvaUseImpTopTen->keys())->contains($key);                
        });

        $q9Sizeheader = "You selected {$plaEvaUseImp->count()} use cases for planning, evaluating, using, or implementing in the {$sizeKeys[$size]} size band. ";
        $q9Sizeheader.= "Of these, {$plaEvaUseImpTopTen->count()} are in the top 10 use cases adopted in this band:</br>";
        $q9Sizeheader.= "{$plaEvaUseImpTopTenLabels->values()->implodeLast(', ',', and ')}.</br></br>";

        $q9Sizebody = "";
        if(count($plaEvaUseImpTopTen)<4){
            $q9Sizebody .= "You have few of your use cases in the top 10 for the {$sizeKeys[$size]} size band. Whilst this is not a problem you might want to review the {$sizeKeys[$size]} size band use case list when considering future Big Data projects.";
        }
        if(count($plaEvaUseImpTopTen)>=4 && count($plaEvaUseImpTopTen)<6){
            $q9Sizebody .= "close to half of the top ten {$sizeKeys[$size]} size band use cases are included in your list of use cases for your Big Data implementations. This is a reasonable coverage and implies your business needs align reasonably well with others in {$sizeKeys[$size]} size band.";
        }
        if(count($plaEvaUseImpTopTen)>=6 && count($plaEvaUseImpTopTen)<8){
            $q9Sizebody .= "More than half of the top 10 {$sizeKeys[$size]} size band use cases are included in your Big Data implementations, which shows good alignment between your Big Data implentations and those of your peers.";
        }
        if(count($plaEvaUseImpTopTen)>=8 && count($plaEvaUseImpTopTen)<10){
            $q9Sizebody .= "Nearly all of the top 10 {$sizeKeys[$size]} size band use cases are included in your Big Data implementations, which shows very good alignment between your Big Data implentations and those of your peers.";
        }
        if(count($plaEvaUseImpTopTen) == 10){
            $q9Sizebody .= "You include all of the top 10 {$sizeKeys[$size]} size band use cases in your Big Data implementation, which gives excellent alignment between your business needs and those of your peers.";
        }


        $questionSize9 = $q9Sizeheader.$q9Sizebody;

        $q9Industryset = $industryReference['q9'][$industry];
        $q9IndustryAnswers = collect($answer)->only(array_keys($q9Industryset))->filter();


        $q9IndustryAnswerlabels = collect($singleQuestions)->filter(function($item, $key) use($q9IndustryAnswers){
            return collect($q9IndustryAnswers->keys())->contains($key);                
        });

        //q9IndustryGraph
        $colours = [
            '#c6dd64',
        ];
        $q9GraphIndustryValues = collect($industryGraphReference['q9'][$industry])->mapWithKeys(function($item){
            return [$item['label'] => $item['value']];
        })->filter()->toArray();

        asort($q9GraphIndustryValues);

        $q9GraphIndustryUserShapes = collect($q9GraphIndustryValues)->filter(function($item, $key) use($q9IndustryAnswerlabels){
            return $q9IndustryAnswerlabels->contains($key);
        })->map(function($item, $key) use($q9GraphIndustryValues, $q9IndustryAnswers, $q9IndustryAnswerlabels){
            return [
                [
                    'line',
                    'x1' => 'g0',
                    'y1' => 'g'.(collect($q9GraphIndustryValues)->keys()->search($key)+0.5),
                    'x2' => 'g'.$q9IndustryAnswers->get($q9IndustryAnswerlabels->search($key)),
                    'y2' => 'g'.(collect($q9GraphIndustryValues)->keys()->search($key)+0.5),
                    'stroke-width' => 2,
                    'stroke' => '#842573',
                    'depth' => 'above',
                ],
                [
                    'circle',
                    'cx' => 'g'.$q9IndustryAnswers->get($q9IndustryAnswerlabels->search($key)),
                    'cy' => 'g'.(collect($q9GraphIndustryValues)->keys()->search($key)+0.5),
                    'r' => 8,
                    'stroke' => '#FFF',
                    'stroke-width' => 2,
                    'depth' => 'above',
                    'fill' => '#842573'
                ],
            ];
        });

        $graphSettings['shape'] = $q9GraphIndustryUserShapes->flatten(1)->values()->toArray();

        $graphSettings['grid_division_h'] = 1;
        $graphSettings['grid_division_v'] = null;
        $graphSettings['axis_max_h'] = 5;
        $graphSettings['bar_space'] = 8;
        $graphSettings['axis_max_v'] = null;
        $graphSettings['axis_max_h'] = 4;
        $graphSettings['pad_right'] = 20;
        $graphSettings['legend_entries'] = null;
        $graphSettings['axis_text_callback_y'] = function($value){
            if($value == 1) return "Using or\n implementing";
            if($value == 2) return "Evaluating or\n planning";
            if($value == 3) return "Interested,\n but no plans";
            if($value == 4) return "Not interested\n and no plans";
        };

        $graph = new \Goat1000\SVGGraph\SVGGraph(650, collect($q9GraphIndustryValues)->count()*27+20, $graphSettings);
        $graph->colours($colours);

        $graph->values(collect($q9GraphIndustryValues)->mapWithKeys(function($item, $key){
            return [wordwrap($key, 40, "\n", false) => $item];
        })->toArray());

        $q9IndustryGraph = "
        <div class='block mb-2'>
        	<span class='figure'>Figure 16 - Specific industry response: Business Use Case position</span>
        	<div class='industrygraph'>
        		{$industryKeys[$industry]}
        	</div>
        	{$graph->fetch('HorizontalBarGraph', false)}
        </div>";
        //{$q9IndustryAnswerlabels->implodeLast(', ',', and ')}
        $plaEvaUseImp = $q9IndustryAnswers->filter(function($item){
            return $item < 3 && $item > 0;
        });
        $plaEvaUseImpTopTen = $plaEvaUseImp->filter(function($item,$key) use($industryReference, $industry){
            return $industryReference['q9'][$industry][$key] < 11;
        });

        $plaEvaUseImpTopTenLabels = collect($singleQuestions)->filter(function($item, $key) use($plaEvaUseImpTopTen){
            return collect($plaEvaUseImpTopTen->keys())->contains($key);                
        });

        $q9Industryheader = "You selected {$plaEvaUseImp->count()} use cases for planning, evaluating, using, or implementing in the {$industryKeys[$industry]}. ";
        $q9Industryheader.= "Of these, {$plaEvaUseImpTopTen->count()} are in the top 10 use cases adopted in this industry:</br>";
        $q9Industryheader.= "{$plaEvaUseImpTopTenLabels->values()->implodeLast(', ',', and ')}.</br></br>";

        $q9Industrybody = "";
        if(count($plaEvaUseImpTopTen)<4){
            $q9Industrybody .= "You have few of your use cases in the top 10 for the {$industryKeys[$industry]}. Whilst this is not a problem you might want to review the {$industryKeys[$industry]} use case list when considering future Big Data projects.";
        }
        if(count($plaEvaUseImpTopTen)>=4 && count($plaEvaUseImpTopTen)<6){
            $q9Industrybody .= "close to half of the top ten {$industryKeys[$industry]} use cases are included in your list of use cases for your Big Data implementations. This is a reasonable coverage and implies your business needs align reasonably well with others in {$industryKeys[$industry]}.";
        }
        if(count($plaEvaUseImpTopTen)>=6 && count($plaEvaUseImpTopTen)<8){
            $q9Industrybody .= "More than half of the top 10 {$industryKeys[$industry]} use cases are included in your Big Data implementations, which shows good alignment between your Big Data implentations and those of your peers.";
        }
        if(count($plaEvaUseImpTopTen)>=8 && count($plaEvaUseImpTopTen)<10){
            $q9Industrybody .= "Nearly all of the top 10 {$industryKeys[$industry]} use cases are included in your Big Data implementations, which shows very good alignment between your Big Data implentations and those of your peers.";
        }
        if(count($plaEvaUseImpTopTen) == 10){
            $q9Industrybody .= "You include all of the top 10 {$industryKeys[$industry]} use cases in your Big Data implementation, which gives excellent alignment between your business needs and those of your peers.";
        }


        $questionIndustry9 = $q9Industryheader.$q9Industrybody;

        $q9question = '
        	<h3>Q9. If we look at the following specific Big Data and analytics business use cases, what is your organization\'s position on each of these?</h3>
        ';
        $q9intro = '
        	<strong class="italic font-light">Overview</strong>
        	<p class="mb-2">
        		Finally, question 9 looks at the use cases given by respondents in your industry and size band, and helps you to align your specific use cases to those of your peers. The data is sorted in order of the number of respondents that selected each of the use cases, and shows your position for each of the use cases you plan to adopt for your Big Data installation. 
        	</p>
        ';

        $question9 = $q9question.$q9intro.$q9SizeGraph.$questionSize9.$q9IndustryGraph.$questionIndustry9;

        $html=$question1.$question2.$question4.$question5.$question6a.$question7.$question8.$question9;
        return $html;
	}

	private function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }
    private function rankArray($array) {
        arsort($array);
        $rank = [];
        $occurrences = array_count_values($array);
        $i = 0;
        $currRank = 0;
        foreach($array as $key => $value) {
            if( $value != $currRank){
                $i = array_search($key,array_keys($array))+1;
                $currRank = $value;
            }
            $rank[$key] = $i;
        }
        return $rank;
    }
}