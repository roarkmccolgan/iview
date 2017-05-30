<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEloquaRequest extends Job implements ShouldQueue, SelfHandling
{
    use InteractsWithQueue, SerializesModels;

    protected $url;
    protected $query;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url, $query)
    {
        $this->url = $url;
        $this->query = $query;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $client = new \GuzzleHttp\Client();
        try {
                            
            $response = $client->request('POST', $this->url, [
                'form_params' => $this->query
            ]);
            $code = $response->getStatusCode();

        } catch (GuzzleHttp\Exception\RequestException $e) {
            
            $mailer->send('emails.errors', array('process'=>'Guzzle', 'message'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')), function($message)
            {
                $message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on Converged Infrastructure - Maturity Benchmark! ('.$currentLocal.')');
            });
        }
    }
}
