<?php

namespace App\Http\Controllers;

use App\Repositories\MessageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * @param MessageRepository $messageRepository
     * @param Request $request
     * @return mixed
     */
    public function textTo(MessageRepository $messageRepository, Request $request){
        $data = [
            'user_id' => $request->user_id,
            'chat_id' => $request->chat_id,
            'text' => $request->text,
        ] ;
        return $messageRepository->textTo($data['user_id'], $data['chat_id'], $data['text']);
    }

    /**
     * @param MessageRepository $messageRepository
     * @param Request $request
     * @return mixed
     */
    public function getFromChat(MessageRepository $messageRepository, Request $request){
        $data = [
            'chat_id' => $request->chat_id,
        ];
        return $messageRepository->getFromChat($data['chat_id']);
    }
}
