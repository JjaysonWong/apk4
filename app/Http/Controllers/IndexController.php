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



        $categories = collect(config('categories.categories'))
                    ->mapWithKeys(fn($key) => [$key => __('categories.' . $key)])
                    ->toArray();
    
        $applicationCategories = collect(config('categories.application_categories'))
                                ->mapWithKeys(fn($key) => [$key => __('categories.' . str_replace('1', '', $key))])
                                ->toArray();
    
        $hotRank = collect(config('categories.hot_rank'))
                ->mapWithKeys(fn($key) => [$key => __('categories.' . $key)])
                ->toArray();
    
        $hotAppRank = collect(config('categories.hot_app_rank'))
                    ->mapWithKeys(fn($key) => [$key => __('categories.' . str_replace('1', '', $key))])
                    ->toArray();
                                
        return view('pages.home', [
            'topGameList' => $topGameList,
            'topAppList' => $topAppList,
            'personalizedRecommendation' => $personalizedRecommendation,
            'newUpdateGameList' => config('games.newUpdateGameList'),
            'categories' => $categories,
            'applicationCategories' => $applicationCategories,
            'hotRank' => $hotRank,
            'hotAppRank' => $hotAppRank,
            'games' => config('games.games'),
        ]);
    }

    public function games()
    {
        return view('pages.games');
    }

    public function application()
    {
        return view('pages.application');
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
