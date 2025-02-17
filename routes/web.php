<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AppController;

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


Route::get('/games', [IndexController::class, 'games'])->name('index.game');
Route::get('/application', [IndexController::class, 'application']);
Route::get('/info', [IndexController::class, 'info']);
Route::get('/topic', [IndexController::class, 'topic']);
Route::get('/rank', [IndexController::class, 'rank']);

Route::get('/games/{union_id?}', [GameController::class, 'show'])->name('game.show');
Route::get('/games/category/{category}', [GameController::class, 'showGameCategory'])->name('game.category');

Route::get('/application/{union_id?}', [AppController::class, 'show'])->name('app.show');
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
