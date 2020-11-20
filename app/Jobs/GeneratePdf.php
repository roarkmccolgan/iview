<?php

namespace App\Jobs;

use App\Services\PdfMonkeyService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeneratePdf implements ShouldQueue
{

    use InteractsWithQueue, Queueable, SerializesModels;

    public $assessment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($assessment)
    {
        $this->assessment = $assessment;
        $this->assessment->load('tool');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PdfMonkeyService $pdfMokey)
    {
        $body = $pdfMokey->genrateBody($assessment);
        $templateId = config('baseline_'.$this->assessment->tool_id.'.overall.pdf_monkey_template');
        
        $response = $pdfMokey->generateDocument($body, $templateId);
        $this->assessment->pdf_key = $response['document']['id'];
        $this->assessment->save();
    }
}
