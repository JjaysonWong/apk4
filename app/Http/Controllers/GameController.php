<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Apk4GameList;
use App\Models\Apk4GameImg;

class GameController extends Controller
{
    public function games()
    {
        return view('pages.games');
    }

    public function show($unionId)
    {
        $game = Apk4GameList::with('screenshots')->where('union_id', $unionId)->first();

        if (!$game) {
            abort(404);
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
        
        return view('games.show', compact('game'));
    }

    public function showGameCategory($gameCategories = null)
    {
        return view('pages.games', compact('gameCategories'));
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
