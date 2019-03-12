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
    Route::post("register", "AuthController@register"); 
    Route::post("login", "AuthController@authenticate"); 
    Route::get("logout", 'AuthController@logout')->middleware('jwt.refresh');
    
    // Route::post('follow/{follow_user_id}',  'AuthController@store');
    Route::get('selectclub/{user_id}',  'ClubController@selectclub');
    Route::post('club/create/{user_id}', 'ClubController@store');
    
    Route::get('club/{club_id}', 'ClubController@show');
    Route::put('club/{club_id}/rules', 'ClubController@update');
    // Route::patch('club/{club_id}/users/{user_id}/role', 'ClubController@updaterole');
    Route::patch('club/{club_id}/role', 'ClubController@updaterole');
    
    Route::get('club/{club_id}/mypage/{user_id}',  'MypageController@show');
    Route::put('club/{club_id}/mypage/{mypage_id}',  'MypageController@update');
    Route::put('club/{club_id}/mypage/{mypage_id}/icon',  'MypageController@icon');
    Route::post('club/{club_id}/mypage/{user_id}/myjournal',  'MypageController@store');
    // Route::put('club/{club_id}/mypage/{user_id}/myjournal/{myjournal_id}',  'MypageController@updateMyJournal');
    
    // Route::resource('/discussion', 'DiscussionController');
    Route::get('club/{club_id}/discussion', 'DiscussionController@index');
    Route::post('club/{club_id}/discussion', 'DiscussionController@store');
    Route::put('club/{club_id}/discussion/{discussion_id}', 'DiscussionController@update');
    Route::delete('club/{club_id}/discussion/{discussion_id}', 'DiscussionController@destroy');
    
    
    
    // Route::post('discussion/like', 'DiscussionController@like');
    Route::post('club/{club_id}/discussion/{discussion_id}/like', 'DiscussionController@like');
    Route::post('club/{club_id}/discussion/{discussion_id}/comment', 'DiscussionController@comment');
    Route::put('club/{club_id}/discussion/{discussiont_id}/commentupdate/{discussion_comment_id}', 'DiscussionController@commentUpdate');
    Route::delete('club/{club_id}/discussion/{discussion_id}/comment/{discussion_comment_id}', 'DiscussionController@commentDestroy');
    // Route::post('club/{club_id}/discussion/{discussion_comment_id}/commentlike', 'DiscussionController@commentlike');
    
    // Route::get('club/{club_id}/journal', 'JournalController@index');
    // Route::post('club/{club_id}/journal', 'JournalController@store');
    // Route::put('club/{club_id}/journal/{journal_id}', 'JournalController@update');
    // Route::delete('club/{club_id}/journal/{journal_id}', 'JournalController@destroy');
    
    // Route::post('club/{club_id}/journal/{journal_id}/like', 'JournalController@like');
    // Route::post('club/{club_id}/journal/{journal_id}/comment', 'JournalController@comment');
    // Route::put('club/{club_id}/journal/{journal_comment_id}/comment', 'JournalController@commentUpdate');
    // Route::delete('club/{club_id}/journal/{journal_comment_id}/comment', 'JournalController@commentDestroy');
    // Route::post('club/{club_id}/journal/{journal_comment_id}/commentlike', 'JournalController@commentlike');
    
    Route::get('club/{club_id}/calendar', 'CalendarController@index');
    Route::post('club/{club_id}/calendar', 'CalendarController@store');
    Route::put('club/{club_id}/calendar/{calendar_id}', 'CalendarController@update');
    Route::delete('club/{club_id}/calendar/{calendar_id}', 'CalendarController@destroy');
    
    Route::get('club/{club_id}/menu', 'MenuController@index');
    Route::post('club/{club_id}/menu', 'MenuController@store');
    Route::put('club/{club_id}/menu', 'MenuController@updatetag');
    Route::put('club/{club_id}/menu/{menu_id}', 'MenuController@update');
    Route::delete('club/{club_id}/menu/{menu_id}', 'MenuController@destroy');
});


Route::group(["middleware" => "jwt.auth"], function() {
    Route::get("/me", 'AuthController@getCurrentUser');
});