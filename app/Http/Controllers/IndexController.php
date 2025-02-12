<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function index()
    {
        $dbGameList = DB::table('apk4_game_list')->orderBy('game_score', 'desc')->limit(10)->get();
        $topGameList = json_decode(json_encode($dbGameList), true);

        $dbAppList = DB::table('apk4_app_list')->orderBy('game_score', 'desc')->limit(10)->get();
        $topAppList = json_decode(json_encode($dbAppList), true);

        $personalizedRecommendation = DB::table('apk4_game_list')
                                    ->orderBy('game_score', 'desc')
                                    ->inRandomOrder()
                                    ->limit(30)
                                    ->get()
                                    ->map(function ($game) {
                                        if (!empty($game->uptime)) {
                                            $game->uptime = date('Y-m-d', $game->uptime);
                                        }
                                        return $game;
                                    })
                                    ->toArray();
        return view('pages.home', [
            'topGameList' => $topGameList,
            'topAppList' => $topAppList,
            'personalizedRecommendation' => $personalizedRecommendation,
            'newUpdateGameList' =>  config('games.newUpdateGameList'),
            'categories' => config('categories.categories'),
            'applicationCategories' => config('categories.application_categories'),
            'hotRank'  => config('categories.hot_rank'),
            'hotAppRank'  => config('categories.hot_app_rank'),
            'games' => config('games.games'),
        ]);
    }

    public function games()
    {
        return view('pages.games');
    }

    public function application()
    {
        return view('application');
    }

    public function info()
    {
        return view('info');
    }

    public function topic()
    {
        return view('topic');
    }
    
    public function rank()
    {
        return view('rank');
    }
}
