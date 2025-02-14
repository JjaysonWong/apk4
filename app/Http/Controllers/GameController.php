<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class GameController extends Controller
{
    public function show($unionId)
    {
       
        $game = DB::table('apk4_game_list')
                ->where('union_id', $unionId)
                ->first();

        if (!$game) {
            abort(404);
        }
        
        return view('games.show', compact('game'));
    }
}
