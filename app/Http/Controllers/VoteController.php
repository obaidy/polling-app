<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index($id)
    {
        $polls = \App\Poll::all();
        $options = \App\Option::all();

        return view('home', compact('polls', 'options'));
    }
}
