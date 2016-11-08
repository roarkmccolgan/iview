<?php

namespace App\Events;

use App\Events\Event;
use App\Tool;
use App\User;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class UserWasCreated extends Event
{
    use SerializesModels;

    public $user;
    public $tool;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user,Tool $tool)
    {
        $this->user = $user;
        $this->tool = $tool;
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
