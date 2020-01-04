<?php

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

Route::get('message', 'MessageController@index');
Route::get('message/create', function() {
    return view('/message/create');
});
Route::post('message/create', 'MessageController@create');
Route::get('message/{messageId}', 'MessageController@show');
Route::delete('message/{messageId}', 'MessageController@delete');

Route::get('message/{messageId}/create{type?}', 'BalloonController@create');
Route::post('message/{messageId}/create{type?}', 'BalloonController@create');
Route::delete('message/{messageId}/{balloonId}', 'BalloonController@delete');

Route::get('message/{messageId}/{balloonId}/edit', 'BalloonController@edit');
Route::post('message/{messageId}/{balloonId}/update', 'BalloonController@update');