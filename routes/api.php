<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/text/{chat_id}', 'MessageController@textTo')->name('text');

Route::get('/getmsgs/{user_id}&{chat_id}', 'ChatController@getMessagesApi')->name('getMsgsApi');

Route::post('/zxc', function (){event(new \App\Events\MessageSentEvent('zxc i ti pokoynik'));});
