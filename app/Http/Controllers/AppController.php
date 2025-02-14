<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppController extends Controller
{
    public function show($unionId)
    {
        $app= DB::table('apk4_app_list')
                ->where('union_id', $unionId)
                ->first();

        if (!$app) {
            abort(404);
        }
        
        return view('apps.show', compact('app'));
    }
}
