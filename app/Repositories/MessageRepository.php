<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MessageRepository
 * @package App\Repositories
 * @method Message startCondition()
 */
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
            'time' => now(),
        ]);
    }

    /**
     * @param int $chat_id
     * @param int $user_id
     * @return mixed
     * get all messages from chat and makes it read
     */
    public function getFromChat($chat_id, $user_id){
        $this->startCondition()
            ->where('chat_id', $chat_id)
            ->where('from_user_id', '!=', $user_id)
            ->where('read, 0')
            ->update([
                'is_read' => 1,
            ]);
        return $messages = $this->startCondition()
            ->where('chat_id', $chat_id)
            ->get();
    }
}
