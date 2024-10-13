<?php

namespace App\Http\Controllers\Portal;

use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;

/**
 * Manage authenticate for admin user
 */
class AuthController extends Controller {
    protected $guard = 'portal';

    public function login(Request $req) {
        if (Auth::guard($this->guard)->check()) {
            return Redirect::to(route('portal.agent.home'));
        }
        if ($req->isMethod('post')) {
            $validator = Validator::make(Input::all(), [
                'username' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return Redirect::to(route('portal.login'))
                                ->withErrors($validator) // send back all errors to the login form
                                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {
                $credentials = [
                    'username' => strtoupper($req->username),
                    'password' => $req->password
                ];
                if (!Auth::guard($this->guard)->attempt($credentials, false)) {
                    return Redirect::to(route('portal.login'))
                                ->withErrors([
                                    'password' => 'Wrong username/password!'
                                ]);
                } else {
                    $user = Auth::guard($this->guard)->user();
                    $user->token = Session::getId();
                    $user->save();
                    if ($user->user_type === User::TYPE_MEMBER) {
                        Auth::guard($this->guard)->logout();
                        return Redirect::to(route('portal.login'))
                                ->withInput(Input::except('password'))
                                ->withErrors([
                                    'password' => 'Tài khoản bạn không có quyền chơi!'
                                ]); //the password) so that we can repopulate the form
                    }
                    if (!$user->inStatus([User::STATUS_ACTIVE, User::STATUS_SUSPENDED])) {
                        Auth::guard($this->guard)->logout();
                        return Redirect::to(route('portal.login'))
                                ->withInput(Input::except('password'))
                                ->withErrors([
                                    'password' => 'Tài khoản đã bị khóa, vui lòng liên hệ admin'
                                ]);
                    }
                    $user->last_ip_login = get_client_ip();
                    $user->online = true;
                    $user->last_time_login = date("Y-m-d H:i:s");
                    $user->save();
                    return Redirect::to(route('portal.agent.home'));
                }
            }
        }

        return view('portal.login');
    }

    public function logout(Request $req) {
        $user = Auth::guard($this->guard)->user();
        $user->online = false;
        $user->save();
        User::logoutCode();
        Auth::guard($this->guard)->logout();
        return redirect()->to(route('portal.login'))->with('status', trans('auth.logout'));
    }
}
