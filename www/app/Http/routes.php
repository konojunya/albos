<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/music', 'musicController@all');
Route::get('/music/{album_id}', 'musicController@select');

Route::get('/music/{music_id}/buy', 'BuyController@buy');


Route::get('/user/{user_id}/home', 'HomeController@index');


// Route::get('/user/{user_id}/edit', function () {
//     return view('');
// });
// Route::get('/user/{user_id}/buy_history', function () {
//     return view('');
// });

// API
Route::get('/api/music','musicController@apiAll');
Route::get('/api/music/detail','musicController@apiSelect');
// Route::get('/api/band/{band_id}/music','musicController@apiBand');

Route::get('/api/user/home','HomeController@apiIndex');
Route::get('/api/user/home/edit','HomeController@apiEdit');
Route::get('/api/user/home/history','HomeController@apiHistory');




