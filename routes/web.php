<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::get('/createchat/{user_id}', 'ChatController@createPrivateChat')->name('createchat');
Route::get('/home', 'ChatController@getUserChats')->name('home');
Route::get('/chat/{chat_id}', 'ChatController@getMessages')->name('chat');
Route::post('get/chat', 'ChatController@getChatsApi')->name('chatApi');
Route::post('get/msgs/{chat_id}', 'ChatController@getMessagesApi')->name('msgsApi');
