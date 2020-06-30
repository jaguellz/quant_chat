<?php

namespace App\Http\Controllers;

use App\Repositories\ChatRepository;
use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * @param ChatRepository $chatRepository
     * @param array $users
     * @param string $name
     * @return string
     */
    public function createGroupChat(ChatRepository $chatRepository, array $users, $name){
        $creator = Auth::id();
        $chatRepository->createGroupChat($creator,$users,$name);
        return 'done';
    }
    public function createPrivateChat(ChatRepository $chatRepository, Request $request){
        $data = [
            'first_user_id' => $request->first_user_id,
            'second_user_id' => $request->second_user_id,
        ];
        return $chatRepository->createPrivateChat($data['first_user_id'], $data['second_user_id']);
    }

    public function getUserChats(ChatRepository $chatRepository, $user_id){
        return $chatRepository->getUserChats($user_id);
    }
}
