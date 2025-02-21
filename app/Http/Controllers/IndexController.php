<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\Apk4GameList;
use App\Models\Apk4AppList;

class IndexController extends Controller
{
    public function index()
    {
        $topGameList = Apk4GameList::orderBy('game_score', 'desc')->limit(16)->get()->toArray();

        // Apply Str::slug to the name attribute
        $topGameList = array_map(function($game) {
            $game['slug'] = Str::slug($game['name']);
            return $game;
        }, $topGameList);

        $topAppList = Apk4AppList::orderBy('game_score', 'desc')->limit(16)->get()->toArray();

        $personalizedRecommendation = collect($topGameList)->map(function ($game) {
            if (!empty($game['uptime'])) {
                $game['uptime'] = date('Y-m-d', strtotime($game['uptime']));
            }
            return $game;
        })->toArray();

        // $categories = collect(config('categories.categories'))
        //             ->mapWithKeys(fn($key) => [$key => __('categories.' . $key)])
        //             ->toArray();
    
        $applicationCategories = collect(config('categories.application_categories'))
                                ->mapWithKeys(fn($key) => [$key => __('categories.' . str_replace('1', '', $key))])
                                ->toArray();
    
        $hotRank = collect(config('categories.hot_rank'))
                ->mapWithKeys(fn($key) => [$key => __('categories.' . $key)])
                ->toArray();
    
        $hotAppRank = collect(config('categories.hot_app_rank'))
                    ->mapWithKeys(fn($key) => [$key => __('categories.' . str_replace('1', '', $key))])
                    ->toArray();
        
        $newUpdateGameList = Apk4GameList::whereIn('id', [269, 9442, 14280])
            ->orderBy('game_score', 'desc')
            ->limit(16)
            ->get(['union_id', 'name', 'keywords'])
            ->toArray();

        $formattedUpdateGameList = [];
        $index = 1;

        foreach ($newUpdateGameList as $game) {
            $formattedUpdateGameList[$index] = [
                'name' => $game['name'],
                'union_id' => $game['union_id'],
                'keywords' => $game['keywords']
            ];
            $index++;
        }


        $dbGameCategory = Apk4GameList::join('apk4_category', 'apk4_category.id', '=', 'apk4_game_list.type')
            ->select('apk4_category.catalog', 'apk4_game_list.name', 'apk4_game_list.union_id', 'apk4_game_list.icon')
            ->orderBy('apk4_game_list.id', 'asc')
            ->get()
            ->groupBy('catalog')
            ->reduce(function ($carry, $games, $catalog) {
                $localizedCatalog = __('categories.' . $catalog);
                $carry[$catalog] = [
                    'catalog' => $localizedCatalog,
                    'games' => $games->take(16)->toArray()
                ];
                return $carry;
            }, []);

        $dbAppCategory = Apk4AppList::join('apk4_category', 'apk4_category.id', '=', 'apk4_app_list.type')
            ->whereNotIn('apk4_app_list.type', [15, 46, 48])
            ->select('apk4_category.catalog', 'apk4_app_list.name', 'apk4_app_list.union_id', 'apk4_app_list.icon')
            ->orderBy('apk4_app_list.id', 'asc')
            ->get()
            ->groupBy('catalog')
            ->reduce(function ($carry, $apps, $catalog) {
                $localizedCatalog = __('categories.' . $catalog);
                $carry[$catalog] = [
                'catalog' => $localizedCatalog,
                'apps' => $apps->take(16)->toArray()
                ];
                return $carry;
            }, []);


        return view('pages.home', [
            'topGameList'                => $topGameList,
            'topAppList'                 => $topAppList,
            'personalizedRecommendation' => $personalizedRecommendation,
            'newUpdateGameList'          => $formattedUpdateGameList,
            'applicationCategories'      => $applicationCategories,
            'hotRank'                    => $hotRank,
            'hotAppRank'                 => $hotAppRank,
            'dbGameCategory'             => $dbGameCategory,
            'dbAppCategory'              => $dbAppCategory,
            'games'                      => config('games.games'),
        ]);
    }
}
