<?php

use App\Http\Controllers\ConLanding;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('/', ConLanding::class);
//Route::resource('/players', ConLanding::class);

Route::get('/', function () {
    return view('pages.landing-page.index');
});
Route::get('/clubs', function () {
    return view('pages.landing-page.clubs');
});
Route::get('/managers', function () {
    return view('pages.landing-page.managers');
});
Route::get('/players', function () {
    return view('pages.landing-page.players');
});
Route::get('/stadiums', function () {
    return view('pages..landing-page.stadiums');
});
