<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

class MessageRepository extends BaseRepository {
    /**
     * @var Model
     */
    protected $model;

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return 'App\Models\Message';
    }

    /**
     * @param int $user_id
     * @param int $chat_id
     * @param string $text
     * @return mixed
     */
    public function textTo($user_id, $chat_id, $text){
        return Message::create([
            'from_user_id' => $user_id,
            'chat_id' => $chat_id,
            'text' => $text,
            'date' => now(),
        ]);
    }

    /**
     * @param int $chat_id
     * @return mixed
     */
    public function getFromChat($chat_id){
        return $messages = $this->startCondition()
            ->where('chat_id', $chat_id)
            ->get();
    }
}
