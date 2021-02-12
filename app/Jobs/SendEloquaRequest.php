<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEloquaRequest extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $url;
    protected $query;
    protected $method;
    protected $headers;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url, $query, $method = 'POST', $headers = '[]')
    {
        $this->url = $url;
        $this->query = $query;
        $this->method = $method;
        $this->headers = $headers;
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
            $response = $client->request($this->method, $this->url, [
                'form_params' => $this->query,
                'headers' => $this->headers,
            ]);
            $code = $response->getStatusCode();
        } catch (GuzzleHttp\Exception\RequestException $e) {
            $mailer->send('emails.errors', ['process'=>'Guzzle', 'message'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')], function ($message) {
                $message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on '.isset($this->query['refURL']) ? $this->query['refURL'] : $this->query['elqFormName']);
            });
        }
    }
}
