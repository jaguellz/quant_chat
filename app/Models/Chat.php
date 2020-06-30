<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'name', 'first_user_id', 'second_user_id',
    ];
}
