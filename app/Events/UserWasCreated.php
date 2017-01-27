<?php

namespace App\Events;

use App\Events\Event;
use App\Tool;
use App\User;
use App\Url;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class UserWasCreated extends Event
{
    use SerializesModels;

    public $user;
    public $tool;
    public $url;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user,Tool $tool, URL $url)
    {
        $this->user = $user;
        $this->tool = $tool;
        $this->url = $url;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
