<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Apk4GameList;
use App\Models\Apk4GameImg;
use App\Models\Apk4GamePack;
use App\Models\Apk4Category;

class GameController extends Controller
{
    public function games($categories = 'all')
    {
        $gameCategories = Apk4Category::where('classify', 1)->pluck('catalog', 'id')->toArray();
        $gameCategories[] = 'all';
        $fullGameList['all'] = Apk4GameList::limit(30)->get()->toArray();

        $topFourGames = Apk4GameList::orderBy('game_score', 'desc')
            ->limit(4)
            ->get()
            ->toArray();

        $recommendedGames = Apk4GameList::get()
            ->unique('type')
            ->take(6)
            ->toArray();
           
        return view('pages.games',compact('fullGameList','gameCategories','categories','recommendedGames','topFourGames'));
    }

    public function show($unionId)
    {
        $game = Apk4GameList::with('screenshots')->where('union_id', $unionId)->first();

        if (!$game) {
            abort(404);
        }

        $category = Apk4Category::find($game->type);

        if ($category) {
            $game->category_name = $category->name;
            $game->seo_description = $category->seo_description;
        }

        $similarGames = Apk4GameList::where('type', $game->type)
            ->where('union_id', '!=', $unionId)
            ->limit(6)
            ->get()
            ->toArray();
        
        $hotGames = Apk4GameList::where('type', $game->type)
            ->where('union_id', '!=', $unionId)
            ->orderBy('game_score', 'desc')
            ->limit(5)
            ->get()
            ->toArray();

        foreach ($hotGames as &$hotGame) {
            $hotGame['catalog'] = $category->catalog;
        }
        unset($hotGame);

        $recommendedGames = Apk4GameList::where('union_id', '!=', $unionId)
            ->inRandomOrder()
            ->get()
            ->unique('type')
            ->take(6)
            ->toArray();
        
        // 1游戏 2应用
        $gameCategories = Apk4Category::where('classify', 1)->get()->toArray();
        array_push($gameCategories, ['catalog' => 'all']);
       
        if (!empty($game->gameid)) {
            $downloadUrl = Apk4GamePack::where('id',$game->gameid)->first();
            $game->android_url = $downloadUrl->and_url;
            $game->pc_url = $downloadUrl->pc_url;
            $game->category = $category->catalog;
            $game->size = $downloadUrl->and_size;
        }
        
        if (!empty($game->uptime)) {
            $game->uptime = date('Y-m-d H:i:s', $game->uptime);
        }

        $gameScreenshot = $game->screenshots->toArray();

        if (!empty($gameScreenshot)) {
            $screenshots = [];

            foreach ($gameScreenshot as $value) {
                $screenshots[] = config('app.img_db') . $value['path'];
            }

            $game->screenshots = $screenshots;
        }else {
            $game->screenshots = [];
        }
        $game->app_version = $this->extractVersion($game->title);

        return view('games.show', compact('game', 'gameCategories','similarGames','hotGames','recommendedGames'));
    }

    public function showGameCategory($categories = null)
    {
        // 1游戏 2应用
        $gameCategories = Apk4Category::where('classify', 1)->pluck('catalog','id')->toArray();
        $gameCategories[] = 'all';
        $fullGameList = [];

        if ($categories && $categories !== 'all') {
            $gameId = Apk4Category::where('catalog', $categories)->value('id');
            $fullGameList[$categories] = Apk4GameList::where('type', $gameId)->limit(30)->get()->toArray();
           
            $recommendedGames = Apk4GameList::where('type', $gameId)
                                ->get()
                                ->take(6)
                                ->toArray();
        } else {
            $fullGameList['all'] = Apk4GameList::limit(30)->get()->toArray();

            $recommendedGames = Apk4GameList::get()
                                ->unique('type')
                                ->take(6)
                                ->toArray();
        }

        $topFourGames = Apk4GameList::orderBy('game_score', 'desc')
            ->limit(4)
            ->get()
            ->toArray();

        return view('pages.games', compact('fullGameList','gameCategories','categories','recommendedGames','topFourGames'));
    }

    // Extract version from title
    private function extractVersion($title)
    {
        preg_match('/v\d+(\.\d+)+/', $title, $matches);
        return $matches[0] ?? null; 
    }

    private function extractIntroduce($introduce)
    {
        if (strpos($introduce, 'INTRODUCTION') !== false) {
            $doc = new \DOMDocument();
            @$doc->loadHTML($introduce);
            $paragraphs = $doc->getElementsByTagName('p');
            for ($i = 0; $i < $paragraphs->length; $i++) {
                if (strpos($paragraphs->item($i)->textContent, 'INTRODUCTION') !== false && $i + 1 < $paragraphs->length) {
                    $introduce = $doc->saveHTML($paragraphs->item($i + 1));
                    break;
                }
            }
        }
        $introduce = preg_replace('/<a[^>]*>/', '', $introduce);
        $introduce = preg_replace('/<\/a>/', '', $introduce);
        return $introduce;
    }
}
