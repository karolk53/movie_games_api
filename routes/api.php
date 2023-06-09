<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API

Route::group(['prefix' => 'genre', 'namespace' => 'App\Http\Controllers'], function() {
    Route::get('/','GenreController@index');
});


Route::group(['prefix' => 'movie', 'namespace' => 'App\Http\Controllers'], function() {
    Route::get('/','MovieController@index');
    Route::get('/{movie}','MovieController@show');
    Route::get('/image/{filename}','MovieController@getImage');
}); 