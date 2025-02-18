<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function games($id)
    {
        $game = DB::table('apk4_game')->where('id', $id)->first();
   
        return view('pages.games', ['game' => $game ?? 'DB connection failed']);
       
    }
}
