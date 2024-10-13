<?php

use App\Http\Middleware\RedirectAdminIfAuthenticated;
use App\Http\Middleware\RedirectAdminIfUserStatus;
use App\Http\Middleware\RedirectAdminIfUserPermission;
use App\Http\Middleware\RedirectCodeIfAuthenticated;
use App\Models\User;
/**
 * Admin panel
 * TODO - add authorization for admin user here
 * TODO - add role here
 */
Route::group(['prefix' => 'portal', 'namespace' => 'Portal'], function () {
    Route::get('login', ['as' => 'portal.login', 'uses' => 'AuthController@login']);
    Route::post('login', ['as' => 'portal.loginPost', 'uses' => 'AuthController@login']);
    Route::get('logout', ['as' => 'portal.logout', 'uses' => 'AuthController@logout']);
});

Route::group(['namespace' => 'Portal'], function () {
	Route::get('trigger', ['as' => 'portal.trigger', 'uses' => 'HomeController@trigger']);

	Route::group(['prefix' => 'portal', 'middleware' => RedirectAdminIfAuthenticated::class . ':portal,global,web,active-suspended'], function () {
		Route::group(['middleware' => RedirectAdminIfAuthenticated::class . ':portal,admin'], function () {

			Route::get('users/{id}/updatePermission', ['as' => 'portal.web.updatePermission', 'uses' => 'WebController@updatePermission']);
			Route::post('users/{id}/updatePermission', ['as' => 'portal.web.updatePermissionPost', 'uses' => 'WebController@updatePermission']);
			Route::delete('api/users/{id}/delete', ['as' => 'portal.web.deleteUser', 'uses' => 'ApiController@deleteUser']);

			Route::get('alerts', ['as' => 'portal.agent.alerts', 'uses' => 'AlertController@index']);
			Route::get('alerts/add', ['as' => 'portal.agent.alerts.add', 'uses' => 'AlertController@add']);
			Route::get('alerts/delete/{id}', ['as' => 'portal.agent.alerts.delete', 'uses' => 'AlertController@delete']);
			Route::post('alerts/add', ['as' => 'portal.agent.alerts.add.post', 'uses' => 'AlertController@add']);
		});

		Route::group(['middleware' => RedirectAdminIfUserPermission::class . ':edit_keo_*'], function () {
			$edit_keo_sao_ke = RedirectAdminIfUserPermission::class .':edit_keo_sao_ke';
			$edit_keo_dang_da = RedirectAdminIfUserPermission::class .':edit_keo_dang_da';
			$edit_keo_treo = RedirectAdminIfUserPermission::class .':edit_keo_treo';
			$edit_keo_logs = RedirectAdminIfUserPermission::class .':edit_keo_logs';
			$edit_keo_delete = RedirectAdminIfUserPermission::class .':edit_keo_delete';

			Route::get('api/bets/{id}/delete', ['as' => 'portal.api.deleteBet', 'uses' => 'ApiController@deleteBet'])->middleware($edit_keo_delete);

			Route::get('logs', ['as' => 'portal.agent.logs', 'uses' => 'HomeController@logs'])->middleware($edit_keo_logs);

			Route::get('bets_all', ['as' => 'portal.agent.bets_all', 'uses' => 'HomeController@bets_all'])->middleware($edit_keo_dang_da);
			Route::get('bets/{id}/updateBet', ['as' => 'portal.web.updateBet', 'uses' => 'WebController@updateBet'])->middleware($edit_keo_dang_da);
			Route::post('bets/{id}/updateBet', ['as' => 'portal.web.updateBetPost', 'uses' => 'WebController@updateBet'])->middleware($edit_keo_dang_da);
			
			Route::get('event_pending', ['as' => 'portal.agent.event_pending', 'uses' => 'HomeController@event_pending'])->middleware($edit_keo_treo);
			Route::get('bet_pending', ['as' => 'portal.agent.bet_pending', 'uses' => 'HomeController@bet_pending'])->middleware($edit_keo_treo);
			Route::post('bet_pending', ['as' => 'portal.agent.bet_pending', 'uses' => 'HomeController@bet_pending'])->middleware($edit_keo_treo);
			Route::get('events/{id}/updateEvent', ['as' => 'portal.web.updateEvent', 'uses' => 'WebController@updateEvent'])->middleware($edit_keo_treo);
			Route::post('events/{id}/updateEvent', ['as' => 'portal.web.updateEventPost', 'uses' => 'WebController@updateEvent'])->middleware($edit_keo_treo);

			Route::get('bets_in_saoke', ['as' => 'portal.agent.bets_in_saoke', 'uses' => 'HomeController@bets_in_saoke'])->middleware($edit_keo_sao_ke);
			Route::get('bets/{id}/updateBetInSaoke', ['as' => 'portal.web.updateBetInSaoke', 'uses' => 'WebController@updateBetInSaoke'])->middleware($edit_keo_sao_ke);
			Route::post('bets/{id}/updateBetInSaoke', ['as' => 'portal.web.updateBetInSaokePost', 'uses' => 'WebController@updateBetInSaoke'])->middleware($edit_keo_sao_ke);
		});

		Route::group(['middleware' => RedirectCodeIfAuthenticated::class], function () {
			Route::get('members/create', ['as' => 'portal.agent.createMember', 'uses' => 'HomeController@createMember']);
			Route::get('users/{id}/changepwd', ['as' => 'portal.api.usersChangePwd', 'uses' => 'WebController@changepwd']);
			Route::get('users/{id}/updateMember', ['as' => 'portal.web.updateMember', 'uses' => 'WebController@updateMember']);
			Route::get('users/{id}/updateBetsMember', ['as' => 'portal.web.updateBetsMember', 'uses' => 'WebController@updateBetsMember']);
			Route::get('users/{id}/updateWallet', ['as' => 'portal.web.updateWallet', 'uses' => 'WebController@updateWallet']);
			Route::get('users/{id}/updateCommission', ['as' => 'portal.web.updateCommission', 'uses' => 'WebController@updateCommission']);
			Route::get('secure', ['as' => 'portal.agent.secure', 'uses' => 'HomeController@secure']);
			Route::get('secure_code', ['as' => 'portal.agent.secure_code', 'uses' => 'HomeController@secureCode']);
			Route::get('subaccount', ['as' => 'portal.agent.subaccount', 'uses' => 'HomeController@subaccount']);
			Route::get('match/clone', ['as' => 'portal.agent.match.clone', 'uses' => 'CloneMatchController@index']);
			Route::get('match/list', ['as' => 'portal.agent.match.list', 'uses' => 'CloneMatchController@matchList']);
		});

        Route::get('api/check-online', ['as' => 'portal.web.checkOnline', 'uses' => 'ApiController@checkOnline']);
        Route::post('match/clone', ['as' => 'portal.agent.match.create', 'uses' => 'CloneMatchController@create']);
        Route::get('match/{id}/update', ['as' => 'portal.agent.match.update', 'uses' => 'CloneMatchController@update']);
        Route::post('match/{id}/update', ['as' => 'portal.agent.match.updatePost', 'uses' => 'CloneMatchController@update']);

		Route::get('/delete_data', ['as' => 'portal.agent.delete', 'uses' => 'HomeController@deleteData']);
		Route::post('/delete_data', ['as' => 'portal.agent.delete', 'uses' => 'HomeController@deleteData']);

		Route::get('init_secure_code', ['as' => 'portal.agent.init_secure', 'uses' => 'HomeController@updateSecureCode']);
		Route::post('init_secure_code', ['as' => 'portal.agent.init_securePost', 'uses' => 'HomeController@updateSecureCode']);
		Route::post('subaccount', ['as' => 'portal.agent.subaccountPost', 'uses' => 'HomeController@subaccount']);

		Route::get('login/secure_code', ['as' => 'portal.agent.login_code', 'uses' => 'HomeController@loginCode']);
		Route::post('login/secure_code', ['as' => 'portal.agent.login_codePost', 'uses' => 'HomeController@loginCode']);

		
		
		Route::get('home', ['as' => 'portal.agent.home', 'uses' => 'HomeController@index']);

		Route::get('chuyenkhoan', ['as' => 'portal.agent.chuyenkhoan', 'uses' => 'HomeController@chuyenkhoan']);
		
		Route::get('member_runingbets', ['as' => 'portal.agent.member_runingbets', 'uses' => 'HomeController@member_runingbets']);
		Route::get('member_chua_xu_ly', ['as' => 'portal.agent.member_chua_xu_ly', 'uses' => 'HomeController@member_chua_xu_ly']);

		Route::get('listMember', ['as' => 'portal.agent.listMember', 'uses' => 'HomeController@listMember']);
		Route::post('GetCustomerListData', ['as' => 'portal.agent.GetCustomerListData', 'uses' => 'HomeController@GetCustomerListData']);
		Route::get('GetCustomerAllStatus', ['as' => 'portal.agent.GetCustomerAllStatus', 'uses' => 'HomeController@GetCustomerAllStatus']);
		Route::get('listSubs', ['as' => 'portal.agent.listSubs', 'uses' => 'HomeController@listSubs']);
		Route::get('creditBalanceList', ['as' => 'portal.agent.CreditBalanceList', 'uses' => 'HomeController@CreditBalanceList']);
		Route::get('agentHome', ['as' => 'portal.agent.agentHome', 'uses' => 'HomeController@home']);
		Route::get('header', ['as' => 'portal.agent.header', 'uses' => 'HomeController@header']);
		Route::get('menu', ['as' => 'portal.agent.menu', 'uses' => 'HomeController@menu']);
		Route::get('cancel_void', ['as' => 'portal.agent.cancel_void', 'uses' => 'HomeController@cancel_void']);
		Route::get('bets_runing', ['as' => 'portal.agent.bets_runing', 'uses' => 'HomeController@bets_runing']);
		Route::get('win_lose_details', ['as' => 'portal.agent.win_lose_details', 'uses' => 'HomeController@win_lose_details']);

		Route::get('chitietttmb', ['as' => 'portal.agent.chitietttmb', 'uses' => 'HomeController@chitietttmb']);
		Route::get('footer', ['as' => 'portal.agent.footer', 'uses' => 'HomeController@footer']);

		Route::get('members', ['as' => 'portal.agent.member.list', 'uses' => 'MemberController@index']);

		Route::group(['middleware' => RedirectAdminIfUserStatus::class . ':' . User::STATUS_ACTIVE], function () {

			Route::group(['middleware' => RedirectCodeIfAuthenticated::class. ':portal.agent.listMember'], function () {
				Route::put('api/users/{id}/status', ['as' => 'portal.api.updateStatus', 'uses' => 'ApiController@updateUserStatus']);
			});

			Route::group(['middleware' => RedirectCodeIfAuthenticated::class], function () {
				Route::get('users/{id}/secure_code', ['as' => 'portal.web.secure_code', 'uses' => 'WebController@secure_code']);
			});

			Route::post('users/{id}/changepwd', ['as' => 'portal.web.usersChangePwdPost', 'uses' => 'WebController@changepwd']);
			Route::post('users/{id}/updateMember', ['as' => 'portal.web.updateMemberPost', 'uses' => 'WebController@updateMember']);
			Route::post('users/{id}/updateBetsMember', ['as' => 'portal.web.updateBetsMemberPost', 'uses' => 'WebController@updateBetsMember']);
			Route::post('users/{id}/updateWallet', ['as' => 'portal.web.updateWalletPost', 'uses' => 'WebController@updateWallet']);
			Route::post('users/{id}/updateCommission', ['as' => 'portal.web.updateCommissionPost', 'uses' => 'WebController@updateCommission']);
			Route::post('secure', ['as' => 'portal.agent.securePost', 'uses' => 'HomeController@secure']);
			Route::post('secure_code', ['as' => 'portal.agent.secure_codePost', 'uses' => 'HomeController@secureCode']);
			Route::post('members/create', ['as' => 'portal.agent.createMemberPost', 'uses' => 'HomeController@createMember']);
		});
	});
});
