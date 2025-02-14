<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);


Route::get('/games', [IndexController::class, 'games']);
Route::get('/application', [IndexController::class, 'application']);
Route::get('/info', [IndexController::class, 'info']);
Route::get('/topic', [IndexController::class, 'topic']);
Route::get('/rank', [IndexController::class, 'rank']);

Route::get('/games/{union_id?}', [GameController::class, 'show'])->name('game.show');

// sample route to test database connection
Route::get('/checkdb', function () {

    $game = DB::table('apk4_game')->where('id', 9)->first();
   
    return view('checkdb', ['game' => $game ?? 'DB connection failed']);
});

// language switcher
Route::get('/change-language/{locale}', function ($locale) {
    
    if (in_array($locale, ['en', 'zh'])) { 
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return back();
})->name('change.language');
