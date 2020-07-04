<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Message;
use Illuminate\Http\Request;
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
     * @param Request $request
     * @param int $chat_id
     * @return mixed
     */
    public function textTo($data){
        return Message::create([
            'from_user_id' => $data['user_id'],
            'chat_id' => $data['chat_id'],
            'text' => $data['text'],
            'time' => now(),
        ]);
    }

}
