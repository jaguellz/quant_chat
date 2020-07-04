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
        $chat = Chat::create([
            "first_user_id" => $first_user_id,
            "second_user_id" => $second_user_id,
        ]);
        return redirect(route('chat', $chat->id));
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function getUserChats($user_id){
        $privateChats = $this->startCondition()
            ->query()
            ->where('first_user_id', $user_id)
            ->orWhere('second_user_id', $user_id)
            ->select('id', 'name', 'second_user_id','first_user_id')
            ->get();
        foreach ($privateChats as $chat){
            if ($chat['first_user_id'] == $user_id){
                $chat['name'] =  DB::table('users')
                    ->select('name')
                    ->where('id', $chat['second_user_id'])
                    ->get()[0]->name;
            }
            else{
                $chat['name'] = DB::table('users')
                    ->select('name')
                    ->where('id', $chat['first_user_id'])
                    ->get()[0]->name;
            }
            $lastmsg = $this->getLastMessage($chat['id']);
            $chat['lastmsgtext'] = $lastmsg['text'];
            $chat['lastmsgfrom'] = ($lastmsg['id'] == $user_id) ? "You": $chat['name'];
            $chat['url'] = route('chat', $chat['id']);
            $chat['unread'] = 0 + DB::table('messages')
                ->where('is_read', 0)
                ->where('chat_id', $chat['id'])
                ->where('from_user_id', '!=', $user_id)
                ->count('*');
        }
        /*$groupChats = DB::table('chats_users')
            ->where('user_id', '=', $user_id)
            ->select('id')
            ->get();*/
        return $privateChats;
    }

    /**
     * @param $chat_id
     * @return array
     */

    public function getLastMessage($chat_id){
        //Get ID of last message in this chat
        $lastmsgid = DB::table('messages')
            ->where('chat_id', $chat_id)
            ->max('id');
        //Get last message by id
        $lastmsg = DB::table('messages')
            ->select('text', 'from_user_id', 'time')
            ->where('id', '=', $lastmsgid)
            ->get();
        return [
            'text' =>$lastmsg[0]->text ?? NULL,
            'id' => $lastmsg[0]->from_user_id ?? NULL,
            ];
    }

    public function getMessages($chat_id, $user_id){
        DB::table('messages')
            ->where('chat_id', $chat_id)
            ->where('from_user_id', '!=', $user_id)
            ->where('is_read', 0)
            ->update([
                'is_read' => 1,
            ]);
        $messages = DB::table('messages')
            ->where('chat_id', $chat_id)
            ->get();
        foreach ($messages as $message){
            if ($message->from_user_id == $user_id){
                $message->type = 0;
            }
            else{
                $message->type =1;
            }
        }
        return $messages;
    }

    public function getChatName($chat_id, $user_id){
        $chat = $this->startCondition()
            ->query()
            ->select('first_user_id', 'second_user_id')
            ->where('id',$chat_id)
            ->get();
        if ($chat[0]->first_user_id == $user_id){
            return DB::table('users')
                ->select('name')
                ->where('id', $chat[0]->second_user_id)
                ->get()[0]->name;
        }
        else{
                return DB::table('users')
                    ->select('name')
                    ->where('id', $chat[0]->first_user_id)
                    ->get()[0]->name;
        }
    }

    public function chatExists($first_user_id, $second_user_id){
        return DB::table('chats')
            ->where('first_user_id', $first_user_id)
            ->where('second_user_id', $second_user_id)
            ->orWhere(function ($query) use ($first_user_id, $second_user_id) {
                $query->where('second_user_id',  $first_user_id)
                    ->where('first_user_id', $second_user_id);
            })
            ->exists();
    }

    public function newChats($user_id){
        $chat_exists = [$user_id];
        $users = DB::table('users')
            ->select('id')
            ->where('id', '!=', $user_id)
            ->get();
        foreach ($users as $user){
            if ($this->chatExists($user->id, $user_id)) array_push($chat_exists, $user->id);
        }
        $users = DB::table('users')
            ->select('id', 'name')
            ->whereNotIn('id', $chat_exists)
            ->get();
        foreach ($users as $user){
            $user->url = route('createchat', $user->id);
        };
        return $users;
    }
}