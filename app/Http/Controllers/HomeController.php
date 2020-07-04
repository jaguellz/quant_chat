<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function debug()
    {
        $chat = [
          'name' => 'William Lawson',
        ];
        $chats = [
            [
                'url' => route('chat',1),
                'from' => 'You',
                'lastmsgtext' => 'Hello, World!',
                'name' => 'afafs',
                'lastmsgtime' => '10:30 am',
                'unread' => 10,
            ],
        ];
        $msgs = [
            [
                'type' => 1, //1 - from, 0 - to
                'text' => 'afafaSDsfsfsdfsdgsas',
                'time' => '10:30 am',
            ],
            [
                'type' => 0, //1 - from, 0 - to
                'text' => 'afafaSDsfsfsdfsdgsas',
                'time' => '10:31 am',
            ],
        ];
        return view('home', [
            'chats' => json_encode($chats),
            'msgs' => json_encode($msgs),
            'chat' => $chat
        ]);
    }

    public function index()
    {
        $chats = [
            [
                'url' => route('chat',1),
                'from' => 'You',
                'lastmsgtext' => 'Hello, World!',
                'name' => 'afafs',
                'lastmsgtime' => '10:30 am',
                'unread' => 10,
            ],
        ];
        return view('index', ['chats' => json_encode($chats)]);
    }

    public function chat($chat_id)
    {
        $chat = [
            'name' => 'William Lawson',
            'id' => 1,
        ];
        $chats = [
            [
                'url' => route('chat',1),
                'name' => 'afafs',
                'lastmsg' => '10:30 am',
                'unread' => 10,
            ],
        ];
        $msgs = [
            [
                'type' => 1, //1 - from, 0 - to
                'text' => 'afafaSDsfsfsdfsdgsas',
                'time' => '10:30 am',
            ],
            [
                'type' => 0, //1 - from, 0 - to
                'text' => 'afafaSDsfsfsdfsdgsas',
                'time' => '10:31 am',
            ],
        ];
        return view('chat', [
            'chats' => json_encode($chats),
            'msgs' => json_encode($msgs),
            'chat' => $chat,
        ]);
    }
}

