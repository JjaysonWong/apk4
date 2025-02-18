<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/index', function () {
    return view('index');
});

Route::get('/pages/games/{category?}/{page?}', function ($category = null, $page = 1) {
    if ($category === null) {
        $category = '0'; // Default to "All Games"
    }

    return view('games', ['gameId' => $category, 'page' => $page]);
})->where([
    'category' => '(game_\d+|\d+)?', // Match "game_1" or just "2" (for all games)
    'page' => '\d+', // Match only numbers for pagination
]);

Route::get('/pages/applications/{category?}/{page?}', function ($category = null, $page = 1) {
    if ($category === null) {
        $category = '0'; // Default to "All Apps"
    }

    return view('applications', ['appId' => $category, 'page' => $page]);
})->where([
    'category' => '(app_\d+|\d+)?', // Match "app_1" or just "2" (for all applications)
    'page' => '\d+', // Match only numbers for pagination
]);

Route::get('/pages/detail', function () {
    return view('detail');
});

Route::get('/pages/download', function () {
    return view('download');
});

Route::get('/pages/news/{page}', function ($page) {
    return view('news', ['newsCategory' => 'all', 'page' => (int) $page]);
})->where('page', '\d+')->name('news.all');

// Route for specific categories with pagination
Route::get('/pages/news/{category}/{page?}', function ($category, $page = 1) {
    return view('news', ['newsCategory' => $category, 'page' => (int) $page]);
})->where([
    'category' => '(game|app)',
    'page' => '\d+',
])->name('news.category');

// Default route for "/pages/news" (without page number)
Route::get('/pages/news', function () {
    return view('news', ['newsCategory' => 'all', 'page' => 1]);
})->name('news.index');

Route::get('/pages/post', function () {
    return view('post');
});

Route::get('/pages/top', function () {
    return view('top');
});

Route::get('/pages/topics', function () {
    return view('topics');
});

Route::get('/checkdb', function () {
    $game = DB::table('apk4_game')->where('id', 9)->first();
   
    return view('checkdb', ['game' => $game]);
});