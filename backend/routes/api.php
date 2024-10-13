<?php

use Illuminate\Http\Request;
use App\Http\Middleware\RedirectIfUserStatus;
use App\Models\User;
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
Route::post('auth/login', 'Api\UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'Api\UserController@getUserInfo');
    Route::post('changepwd', 'Api\UserController@ChangePwd');
    Route::get('/league/getInPlayLeagues', 'Api\LeaguesController@getInPlayLeagues');
    Route::get('/league/getUpcomingPlayLeagues', 'Api\LeaguesController@getUpcomingPlayLeagues');
    Route::get('/league/live/{matchId}/{liveId}', 'Api\LeaguesController@getLive');
    Route::get('/league/satement', 'Api\LeaguesController@getStatement');
    Route::get('/league/satementReport', 'Api\LeaguesController@getStatementReport');    
    Route::get('/league/satementDetails', 'Api\LeaguesController@getStatementDetails');
    Route::get('/league/result', 'Api\LeaguesController@result');
    Route::group(['middleware' => RedirectIfUserStatus::class . ':' . User::STATUS_ACTIVE], function () {

        Route::post('/bet', 'Api\BetController@create');
        Route::post('/betGroup', 'Api\BetController@createGroup');
        Route::get('/bet/inPlayById/{id}', 'Api\BetController@inPlayById');
    });
});
