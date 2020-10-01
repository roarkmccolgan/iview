<?php

namespace App\Jobs;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendCrmRequest implements ShouldQueue
{
    use SerializesModels;

    public $url;
    public $query;
    public $method;
    public $headers;
    public $auth;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url, $query, $method = 'POST', $headers = null, $auth = '[]')
    {
        $this->url = $url;
        $this->query = $query;
        $this->method = $method;
        $this->headers = $headers;
        $this->auth = $auth;
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
                'body' => json_encode($this->query),
                'headers' => $this->headers,
                'auth' => $this->auth
            ]);
            $code = $response->getStatusCode();
            Log::info($code);
            Log::info(print_r(json_decode($response->getBody()),true));
        } catch (RequestException $e) {
            Log::info(json_encode($this->query));
            $mailer->send('emails.error', ['process'=>'Guzzle', 'reason'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')], function ($message) {
                $message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on '. isset($this->url) ? $this->url : $this->query['elqFormName']);
            });
        } catch (ServerException $e) {
            Log::info($e->getMessage());
            Log::info(json_encode($this->query));
            $mailer->send('emails.error', ['process'=>'Guzzle', 'reason'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')], function ($message) {
                $message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on '. isset($this->url) ? $this->url : $this->query['elqFormName']);
            });
        }
    }
}
