<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
    return view('landingpage');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

// sample route to test database connection
Route::get('/checkdb', function () {

    $game = DB::table('apk4_game')->where('id', 9)->first();
   
    return view('checkdb', ['game' => $game ?? 'DB connection failed']);
});