<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {


        return view('create');
    }

    public function store(Request $request)
    {
        $poll = new Poll();
        $options = $poll->options;
        $poll->question = $request->question;
        $poll->user_id = \Auth::user()->id;
        $poll->save();
        $user = $poll->user;
        $user->save();

        $poll->options()->saveMany([
            new \App\Option(['name' => $request->option1]),
            new \App\Option(['name' => $request->option2]),
            new \App\Option(['name' => $request->option3]),
        ]);


        return redirect(action('CreateController@index'));


    }
}
