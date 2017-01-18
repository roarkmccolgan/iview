<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class SendRegisteredEmail implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        $user = $event->user;
        $tool = $event->tool;
        $url = $event->url;
        $viewData = [
            'user'=>$user,
            'tool'=>$tool,
            'url'=>$url
        ];
        $data['html'] =  View::make('emails.registered', $viewData)->render();
        Mail::queue('emails.echo', $data, function ($message) use ($user) {
            $message->from('notifications@mg.idcready.net', 'IDC Notifications');
            $message->to($user->email, $user->name)->subject(trans('email.register_subject'));
        });
    }
}
