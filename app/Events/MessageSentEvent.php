<?php

namespace App\Events;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSentEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $chat;

    public function __construct(Message $message, Chat $chat)
    {
        $this->message = $message;
        $this->chat = $chat;
    }

    public function broadcastOn()
    {
        return $this->chat->id.'-channel';
    }

    public function broadcastAs()
    {
        return 'message-sent';
    }
}
