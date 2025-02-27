<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Apk4AppList;
use App\Models\Apk4AppImg;
use App\Models\Apk4AppPack;
use App\Models\Apk4Category;
class AppController extends Controller
{
    public function application($categories = 'all')
    {
        $appCategories = Apk4Category::where('classify', 2)->pluck('catalog', 'id')->toArray();
        $appCategories[] = 'all';
        $fullAppList['all'] = Apk4AppList::limit(30)->get()->toArray();

        $topFourApps = Apk4AppList::orderBy('game_score', 'desc')
            ->limit(4)
            ->get()
            ->toArray();

        $recommendedApps = Apk4AppList::get()
            ->unique('type')
            ->take(6)
            ->toArray();
        return view('pages.application',compact('fullAppList','appCategories','categories','recommendedApps','topFourApps'));
    }

    public function show($unionId)
    {
        $app = Apk4AppList::with('screenshots')->where('union_id', $unionId)->first();

        if (!$app) {
            abort(404);
        }

        $category = Apk4Category::find($app->type);

        if ($category) {
            $app->category_name = $category->name;
            $app->seo_description = $category->seo_description;
        }

        $similarApps = Apk4AppList::where('type', $app->type)
            ->where('union_id', '!=', $unionId)
            ->limit(6)
            ->get()
            ->toArray();
        
        $hotApps = Apk4AppList::where('type', $app->type)
            ->where('union_id', '!=', $unionId)
            ->orderBy('game_score', 'desc')
            ->limit(5)
            ->get()
            ->toArray();

        foreach ($hotApps as &$hotApp) {
            $hotApp['catalog'] = $category->catalog;
        }
        unset($hotApp);

        $recommendedApps = Apk4AppList::where('union_id', '!=', $unionId)
            ->inRandomOrder()
            ->get()
            ->unique('type')
            ->take(6)
            ->toArray();

        $appCategories = Apk4Category::where('classify', 2)->get()->toArray();
        array_push($appCategories, ['catalog' => 'all']);
       
        if (!empty($app->gameid)) {
            $downloadUrl = Apk4AppPack::where('id',$app->gameid)->first();
            $app->android_url = $downloadUrl->and_url;
            $app->pc_url = $downloadUrl->pc_url;
            $app->category = $category->catalog;
            $app->size = $downloadUrl->and_size;
        }

        if (!empty($app->uptime)) {
            $app->uptime = date('Y-m-d H:i:s', $app->uptime);
        }

        $appScreenshot = $app->screenshots->toArray();


        if (!empty($appScreenshot)) {
            $screenshots = [];

            foreach ($appScreenshot as $value) {
                $screenshots[] = config('app.img_db') . $value['path'];
            }

            $app->screenshots = $screenshots;
        } else {
            $app->screenshots = [];
        }
        
        $app->app_version = $this->extractVersion($app->title);
        
        return view('apps.show', compact('app' ,'appCategories','similarApps','hotApps','recommendedApps'));
    }

    public function showAppCategory($categories = null)
    {
        // 1游戏 2应用
        $appCategories = Apk4Category::where('classify', 2)->pluck('catalog','id')->toArray();
        $appCategories[] = 'all';
        $fullAppList = [];

        if ($categories && $categories !== 'all') {
            $appId = Apk4Category::where('catalog', $categories)->value('id');
            $fullAppList[$categories] = Apk4AppList::where('type', $appId)->limit(30)->get()->toArray();
           
            $recommendedApps = Apk4AppList::where('type', $appId)
                                ->get()
                                ->take(6)
                                ->toArray();
        } else {
            $fullAppList['all'] = Apk4AppList::limit(30)->get()->toArray();

            $recommendedApps = Apk4AppList::get()
                                ->unique('type')
                                ->take(6)
                                ->toArray();
        }

        $topFourApps = Apk4AppList::orderBy('game_score', 'desc')
                        ->limit(4)
                        ->get()
                        ->toArray();

        return view('pages.application',compact('fullAppList','appCategories','categories','recommendedApps','topFourApps'));
    }

    private function extractVersion($title)
    {
        preg_match('/v\d+(\.\d+)+/', $title, $matches);
        return $matches[0] ?? null; 
    }
}
