<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'api'], function () {
    Route::get('club',  'ClubController@index');
    Route::post('club/update/{id}',  'ClubController@update');
    Route::post('club/role/{id}',  'ClubController@role');
    Route::resource('/discussion', 'DiscussionController');
    Route::post('/discussion/like', 'DiscussionController@like');
    Route::post('/discussion/comment', 'DiscussionController@comment');
    Route::post('/discussion/comment/edit', 'DiscussionController@commentEdit');
    Route::post('/discussion/comment/delete', 'DiscussionController@commentDelete');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('mypage',  'MypageController@index');
    Route::post('mypage/update/{id}',  'MypageController@update');
    Route::post('mypage/upload/{id}',  'MypageController@upload');
});

Route::group(['middleware' => 'api'], function () {
    Route::post('journal/create',  'JournalController@create');
});