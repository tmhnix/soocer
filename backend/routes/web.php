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
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RedirectIfUserStatus;
use App\Http\Middleware\RedirectDevice;
use App\Models\User;
Route::group(['namespace' => 'Web','middleware' => RedirectDevice::class], function () {
    Route::get('login', ['as' => 'web.login', 'uses' => 'AuthController@login']);
    Route::post('login', ['as' => 'web.loginPost', 'uses' => 'AuthController@login']);
    Route::get('logout', ['as' => 'web.logout', 'uses' => 'AuthController@logout']);

    Route::group(['middleware' => RedirectIfAuthenticated::class . ':web,member,web,active-suspended'], function () {
		Route::post('offline',['as' => 'web.offline', 'uses' => 'HomeController@offline']);
		Route::get('/', ['as' => 'web.home', 'uses' => 'HomeController@index']);
		Route::get('/keno/main.aspx', ['as' => 'web.keno', 'uses' => 'KenoController@index']);

		Route::get('/alert', ['as' => 'web.alert', 'uses' => 'BetController@alert']);

		Route::get('/underodds', ['as' => 'web.underodds', 'uses' => 'HomeController@underodds']);
		Route::get('/number_game', ['as' => 'web.number_game', 'uses' => 'HomeController@number_game']);
		Route::get('/correct_score', ['as' => 'web.correct_score', 'uses' => 'HomeController@correct_score']);
		Route::get('/saba_game', ['as' => 'web.correct_score', 'uses' => 'HomeController@saba_game']);
		Route::get('/bingo', ['as' => 'web.bingo', 'uses' => 'HomeController@bingo']);
		Route::get('/underoddsGroup', ['as' => 'web.underoddsGroup', 'uses' => 'HomeController@underoddsGroup']);
		Route::get('/leftIframe', ['as' => 'web.leftIframe', 'uses' => 'HomeController@leftIframe']);
		Route::get('/topmenu', ['as' => 'web.topmenu', 'uses' => 'HomeController@topmenu']);
		Route::get('/statement.aspx', ['as' => 'web.statement', 'uses' => 'HomeController@statement']);
		Route::get('/message', ['as' => 'web.message', 'uses' => 'HomeController@message']);
		Route::get('/statement_details.aspx', ['as' => 'web.statementDetails', 'uses' => 'HomeController@statementDetails']);
		Route::get('/resultFrame.aspx', ['as' => 'web.resultFrame', 'uses' => 'HomeController@resultFrame']);
		Route::get('/UserProfile_Change_Password.aspx', ['as' => 'web.profileChangePwd', 'uses' => 'HomeController@profileChangePwd']);
		Route::post('/UserProfile_Change_Password.aspx', ['as' => 'web.profileChangePwd', 'uses' => 'HomeController@profileChangePwd']);
		Route::get('/UserProfile_Preferences.aspx', ['as' => 'web.UserProfile_Preferences', 'uses' => 'HomeController@UserProfile_Preferences']);
		Route::get('/UserProfile_CSPriority.aspx', ['as' => 'web.UserProfile_CSPriority', 'uses' => 'HomeController@UserProfile_CSPriority']);


		Route::get('/popupLeague.template', ['as' => 'web.popupLeague', 'uses' => 'HomeController@popupLeague']);
		Route::get('/copy', ['as' => 'web.copy', 'uses' => 'HomeController@copy']);
		Route::get('/live/{matchId}/{liveId}', ['as' => 'web.live', 'uses' => 'HomeController@live']);
	});

	Route::group(['middleware' => RedirectIfAuthenticated::class . ':web,member,api,active-suspended'], function () {
		// API =============
		Route::group(['prefix' => 'api'], function () {

			// For active user
			Route::group(['middleware' => RedirectIfUserStatus::class . ':' . User::STATUS_ACTIVE], function () {
				Route::post('bets', ['as' => 'web.api.createBet', 'uses' => 'BetController@create']);
				Route::post('games', ['as' => 'web.api.createGame', 'uses' => 'BetController@createGame']);
				Route::post('bets/group', ['as' => 'web.api.createGroup', 'uses' => 'BetController@createGroup']);
			});
			Route::get('leagues/inplay', ['as' => 'web.api.getInPlayLeagues', 'uses' => 'HomeController@getInPlayLeagues']);
			Route::get('number_games', ['as' => 'web.api.getNumberGames', 'uses' => 'HomeController@getNumberGames']);
			Route::get('leagues/upcoming', ['as' => 'web.api.getUpcomingPlayLeagues', 'uses' => 'HomeController@getUpcomingPlayLeagues']);
			Route::get('leagues/inplay/{id}', ['as' => 'web.api.getInPlayLeaguesById', 'uses' => 'HomeController@getInPlayLeaguesById']);
			Route::get('events/{id}/{type}', ['as' => 'web.api.getEventById', 'uses' => 'HomeController@getEventById']);
			Route::get('leagues', ['as' => 'web.api.getleagues', 'uses' => 'HomeController@getleagues']);
			Route::get('bets/histories', ['as' => 'web.api.histories', 'uses' => 'BetController@histories']);
			Route::get('sabagame/history/{game}', ['as' => 'web.api.sababagame_histories', 'uses' => 'HomeController@getHistorySabagame']);
			Route::get('bets/inplay', ['as' => 'web.api.getInplayBets', 'uses' => 'BetController@inplay']);
			Route::get('account', ['as' => 'web.api.getAccountInfo', 'uses' => 'HomeController@getAccountInfo']);

			Route::get('version/change', ['as' => 'web.api.changeVersion', 'uses' => 'HomeController@changeVersion']);

			Route::group(['prefix' => 'v2', 'namespace' => 'v2'], function () {
				Route::get('leagues/inplay', ['as' => 'web.api.getInPlayLeagues', 'uses' => 'HomeV2Controller@getInPlayLeagues']);
				Route::get('leagues/upcoming', ['as' => 'web.api.getUpcomingPlayLeagues', 'uses' => 'HomeV2Controller@getUpcomingPlayLeagues']);
			});

		});
	});
});