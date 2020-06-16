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
    public function index()
    {
        $msgs = [
            [
                'time' => '8 минут',
                'text' => '1',
                'url' => 'assets/images/avatars/12.jpg',

            ],
            [
                'time' => '4 минут',
                'text' => '2 ',
                'url' => 'assets/images/avatars/12.jpg',

            ],];
        return view('home', ['msgs' => json_encode($msgs)]);
    }
}
