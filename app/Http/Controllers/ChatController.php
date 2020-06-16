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
    public function createGroupChat(ChatRepository $chatRepository, array $users, $name =  "GroupChat"){
        $creator = Auth::id();
        $chatRepository->createGroupChat($creator,$users,$name);
        return 'done';
    }
    public function createPrivateChat(ChatRepository $chatRepository, $second_user_id){
        $first_user_id = Auth::id();
        return $chatRepository->createPrivateChat($first_user_id,$second_user_id);
    }
}
