<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function topic()
    {
        return view('pages.topic');
    }
}
