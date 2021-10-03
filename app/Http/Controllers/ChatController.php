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
    /*public function createGroupChat(ChatRepository $chatRepository, array $users, $name){
        $creator = Auth::id();
        $chatRepository->createGroupChat($creator,$users,$name);
        return 'done';
    }*/
    /**
     * @param ChatRepository $chatRepository
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createPrivateChat(ChatRepository $chatRepository, $second_user_id){
        $data = [
            'first_user_id' => Auth::id(),
            'second_user_id' => $second_user_id,
        ];
        if ($chatRepository->chatExists($data['first_user_id'],$data['second_user_id'])){
            return redirect(route('home'));
        }
        return $chatRepository->createPrivateChat($data['first_user_id'], $data['second_user_id']);
    }

    public function getUserChats(ChatRepository $chatRepository){
        $user_id = Auth::id();
        $chats = $chatRepository->getUserChats($user_id);
        return view('index', [
            'chats' => json_encode($chats),
            'users' => json_encode($chatRepository->newChats($user_id)),
        ]);
    }

    public function getMessages(ChatRepository $chatRepository,$chat_id){
        $user_id = Auth::id();
        $messages = $chatRepository->getMessages($chat_id, $user_id);
        return view('chat', [
            'users' => json_encode($chatRepository->newChats($user_id)),
            'msgs' => json_encode($messages),
            'chats' => json_encode($chatRepository->getUserChats($user_id)),
            'chat' => [
                'name' => $chatRepository->getChatName($chat_id, $user_id),
                'id' => $chat_id
            ],
        ]);
    }

    public function getChatsApi(ChatRepository $chatRepository)
    {
        $user_id = Auth::id();
        $chats = $chatRepository->getUserChats($user_id);
        return response()->json($chats);
    }

    public function getMessagesApi(ChatRepository $chatRepository, $chat_id)
    {
        $user_id = Auth::id();
        $messages = $chatRepository->getMessages($chat_id, $user_id);
        return response()->json($messages);
    }
}
