<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements shouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $date;
    public $message;

    public function __construct($user,$date,$message)
    {
        $this->user = $user;
        $this->date = $date;
        $this->message = $message;
    }

    
    public function broadcastOn()
    {
        return "boxfitChannel";
    }

    public function broadcastAs()
    {
        return "boxfitEvent";
    }
}
