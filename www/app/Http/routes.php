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

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::post('/login', 'loginAuthController@login');



Route::get('/music', 'musicController@all');
Route::get('/music/{album_id}', 'musicController@select');

Route::get('/music/{music_id}/buy', 'BuyController@buy');
Route::get('/{band_id}/music', function () {
    return view('');
});


Route::get('/{user_id}', 'HomeController@index');


Route::get('/user/signup', 'signupController@insert');
Route::get('/user/login', function () {
    return view('');
});
Route::get('/user/logout', function () {
    return view('');
});
// Route::get('/{user_id}', function () {
//     return view('');
// });
Route::get('/{user_id}/edit', function () {
    return view('');
});
Route::get('/{user_id}/buy_history', function () {
    return view('');
});


//管理者
Route::get('/admin', function () {
    return view('');
});
Route::get('/admin/login', function () {
    return view('');
});
Route::get('/admin/logout', function () {
    return view('');
});
Route::get('/admin/examination', function () {
    return view('');
});
Route::get('/admin/examination/accept', function () {
    return view('');
});



