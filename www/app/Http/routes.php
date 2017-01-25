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

Route::get('/home', function () {
    return view('user.mypage');
});

Route::auth();


Route::get('/music', 'musicController@all');
Route::get('/music/{album_id}', 'musicController@select')->where('music_id', '[0-9]+');

Route::get('/music/{music_id}/buy', ['middleware' => 'auth', 'uses' => 'BuyController@buy'])->where('music_id', '[0-9]+');
//postに変える
Route::get('/music/{music_id}/reDownload', 'BuyController@reDownload')->where('music_id', '[0-9]+');

Route::get('/mypage', 'HomeController@index');
Route::get('/mypage/edit', 'HomeController@showEditForm');
Route::post('/mypage/edit', 'HomeController@editProcess');
Route::get('/mypage/edit/password', 'HomeController@showPasswordEdit');
// Route::post('/mypage/edit/password', 'Auth\AuthController@hoge');
Route::post('/mypage/edit/password', 'HomeController@passwordEditProcess');
Route::get('/mypage/edit/password/result', 'HomeController@showPasswordEditResult');

// API
Route::get('/api/music','musicController@apiAll');
Route::get('/api/music/detail','musicController@apiSelect');
// Route::get('/api/band/{band_id}/music','musicController@apiBand');

Route::get('/api/user/home','HomeController@apiIndex');
Route::get('/api/user/home/edit','HomeController@apiEdit');
Route::get('/api/user/home/history','HomeController@apiHistory');




