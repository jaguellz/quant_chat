<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'text', 'from_user_id', 'chat_id', 'time', 'is_read', 'attachment_id'
    ];
}
