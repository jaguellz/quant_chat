<?php


namespace App\Repositories;

use App\Http\Controllers\ChatController;
use App\Models\Chat;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Void_;
use SebastianBergmann\CodeCoverage\TestFixture\C;


class ChatRepository extends BaseRepository
{

    /**
     * @var Model
     */
    protected $model;

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'App\Models\Chat';
    }

    public function createGroupChat($creator, array $users, $name){
        $chat = Chat::create([
            "first_user_id" => $creator,
            "name" => $name,
        ]);
        $chat_id = $chat->id;
        foreach ($users as $user_id){
            $this->startCondition()
                ->append([
                    'user_id' => $user_id,
                    'chat_id' => $chat_id,
                    ]);
        }
        return $chat;
    }

    public function createPrivateChat($first_user_id, $second_user_id){
        return $chat = Chat::create([
            "first_user_id" => $first_user_id,
            "second_user_id" => $second_user_id,
        ]);
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function getUserChats($user_id){
        $privateChats = $this->startCondition()
            ->where('first_user_id', $user_id)
            ->orWhere('second_user_id', $user_id)
            ->select('id')
            ->get();
        $groupChats = DB::table('chats_users')
            ->where('user_id', '=', $user_id)
            ->select('id')
            ->get();
        return $privateChats + $groupChats;
    }
}