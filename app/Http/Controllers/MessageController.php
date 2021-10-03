<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Models\Chat;
use App\Repositories\MessageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * @param MessageRepository $messageRepository
     * @param Request $request
     * @param int $chat_id
     * @return mixed
     */
    public function textTo(MessageRepository $messageRepository, Request $request, $chat_id){
        $data = [
            'user_id' => $request->user_id,
            'chat_id' => $chat_id,
            'text' => $request->text,
        ] ;
        $message = $messageRepository->textTo($data);
        event(new MessageSentEvent($message, Chat::find($chat_id)));
        return redirect(route('chat', $chat_id));
    }
}
