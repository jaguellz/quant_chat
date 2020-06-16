<?php

namespace App\Http\Controllers;

use App\Repositories\MessageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * @param MessageRepository $messageRepository
     * @param string $text
     * @param int $chat_id
     * @param int $attachment
     * @return mixed
     */
    public function textTo(MessageRepository $messageRepository, $text, $chat_id, $attachment = null){
        $user_id = Auth::id();
        return $messageRepository->textTo($user_id, $chat_id, $text);
    }

    /**
     * @param MessageRepository $messageRepository
     * @param int $chat_id
     * @return mixed
     */
    public function getFromChat(MessageRepository $messageRepository, $chat_id){
        return $messageRepository->getFromChat($chat_id);
    }
}
