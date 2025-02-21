<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Apk4AppList;
use App\Models\Apk4AppImg;

class AppController extends Controller
{
    public function application()
    {
        return view('pages.application');
    }

    public function show($unionId)
    {
        $app = Apk4AppList::with('screenshots')->where('union_id', $unionId)->first();

        if (!$app) {
            abort(404);
        }

        if (!empty($app->uptime)) {
            $app->uptime = date('Y-m-d H:i:s', $app->uptime);
        }

        $appScreenshot = $app->screenshots->toArray();


        if (!empty($appScreenshot)) {
            $screenshots = [];

            foreach ($appScreenshot as $value) {
            $screenshots[] = env('IMG_DB') . $value['path'];
            }

            $app->screenshots = $screenshots;
        } else {
            $app->screenshots = [];
        }
        
        $app->app_version = $this->extractVersion($app->title);
        
        return view('apps.show', compact('app'));
    }

    public function showAppCategory($appCategories = null)
    {
        return view('pages.application', compact('appCategories'));
    }

    private function extractVersion($title)
    {
        preg_match('/v\d+(\.\d+)+/', $title, $matches);
        return $matches[0] ?? null; 
    }
}
