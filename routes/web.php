<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\RankController;

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

// Game Routes
Route::prefix('games')->name('game.')->group(function () {
    Route::get('/', [GameController::class, 'games'])->name('index');
    Route::get('/{union_id?}', [GameController::class, 'show'])->name('show');
    Route::get('/category/{category}', [GameController::class, 'showGameCategory'])->name('category');
});

// Application Routes
Route::prefix('application')->name('app.')->group(function () {
    Route::get('/', [AppController::class, 'application'])->name('index');
    Route::get('/{union_id?}', [AppController::class, 'show'])->name('show');
    Route::get('/category/{category}', [AppController::class, 'showAppCategory'])->name('category');
});


Route::get('/info', [InfoController::class, 'info'])->name('info.show');
Route::get('/topic', [TopicController::class, 'topic'])->name('topic.show');
Route::get('/rank', [RankController::class, 'rank'])->name('rank.show');

// sample route to test database connection
Route::get('/checkdb', function () {
    try {
        DB::connection()->getPdo();
        return view('checkdb', ['status' => 'Database connection is successful']);
    } catch (\Exception $e) {
        Log::error('Database connection failed: ' . $e->getMessage());
        return view('checkdb', ['status' => 'DB connection failed']);
    }
});

// language switcher
Route::get('/change-language/{locale}', function ($locale) {
    
    if (in_array($locale, ['en', 'zh'])) { 
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return back();
})->name('change.language');
