<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankController extends Controller
{
    public function rank()
    {
        return view('pages.rank');
    }
}
