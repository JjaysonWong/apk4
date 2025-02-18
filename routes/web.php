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

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/games/{category?}/{page?}', function ($category = null, $page = 1) {
    if ($category === null) {
        $category = '0'; // Default to "All Games"
    }

    return view('pages.games', ['gameId' => $category, 'page' => $page]);
})->where([
    'category' => '(game_\d+|\d+)?', // Match "game_1" or just "2" (for all games)
    'page' => '\d+', // Match only numbers for pagination
]);

Route::get('/applications/{category?}/{page?}', function ($category = null, $page = 1) {
    if ($category === null) {
        $category = '0'; // Default to "All Apps"
    }

    return view('pages.applications', ['appId' => $category, 'page' => $page]);
})->where([
    'category' => '(app_\d+|\d+)?', // Match "app_1" or just "2" (for all applications)
    'page' => '\d+', // Match only numbers for pagination
]);

Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/download', function () {
    return view('pages.download');
});

Route::get('/news/{page}', function ($page) {
    return view('pages.news', ['newsCategory' => 'all', 'page' => (int) $page]);
})->where('page', '\d+')->name('news.all');

// Route for specific categories with pagination
Route::get('/news/{category}/{page?}', function ($category, $page = 1) {
    return view('pages.news', ['newsCategory' => $category, 'page' => (int) $page]);
})->where([
    'category' => '(game|app)',
    'page' => '\d+',
])->name('news.category');

// Default route for "/news" (without page number)
Route::get('/news', function () {
    return view('pages.news', ['newsCategory' => 'all', 'page' => 1]);
})->name('news.index');

Route::get('/post', function () {
    return view('pages.post');
});

Route::get('/top', function () {
    return view('pages.top');
});

Route::get('/topics', function () {
    return view('pages.topics');
});

Route::get('/checkdb', function () {
    $game = DB::table('apk4_game')->where('id', 9)->first();
   
    return view('checkdb', ['game' => $game]);
});