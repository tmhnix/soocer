<?php

namespace App\Http\Controllers\Web;

use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;
use Jenssegers\Agent\Agent;


/**
 * Manage authenticate for admin user
 */
class AuthController extends Controller {
    protected $guard = 'web';

    public function login(Request $req) {
        $type = $req->type;
        $agent = new Agent();
        $view = $agent->isMobile() && $type !== 'desktop'  ? 'web.login' : 'web.login'; // TODO: use the same for now
        if ($req->isMethod('post')) {
            $validator = Validator::make(Input::all(), [
                'username' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return Redirect::to(route('web.login'))
                                ->withErrors($validator) // send back all errors to the login form
                                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {
                $credentials = [
                    'username' => strtoupper($req->username),
                    'password' => $req->password
                ];
                if (!Auth::guard($this->guard)->attempt($credentials, $req->remember_me)) {
                    return Redirect::to(route('web.login'))
                                ->withErrors([
                                    'password' => 'Sai tài khoản hoặc mật khẩu!!!'
                                ]);
                } else {
                    $user = Auth::guard($this->guard)->user();
                    $user->token = Session::getId();
                    $user->save();
                    if ($user->user_type !== User::TYPE_MEMBER) {
                        Auth::guard($this->guard)->logout();
                        return Redirect::to(route('web.login'))
                                ->withInput(Input::except('password'))
                                ->withErrors([
                                    'password' => 'Don\'t have permission!'
                                ]); //the password) so that we can repopulate the form
                    }
                    if (!$user->inStatus([User::STATUS_ACTIVE, User::STATUS_SUSPENDED])) {
                        Auth::guard($this->guard)->logout();
                        return Redirect::to(route('web.login'))
                                ->withInput(Input::except('password'))
                                ->withErrors([
                                    'password' => 'Tài khoản đã bị khóa, vui lòng liên hệ admin'
                                ]);
                    }
                    $user->last_ip_login = get_client_ip();
                    $user->last_time_login = date("Y-m-d H:i:s");
                    $user->online = true;
                    $user->save();
                    return Redirect::to(route('web.home'));
                }
            }
        }

        return view($view);
    }

    public function logout(Request $req) {
        $user = Auth::guard($this->guard)->user();
        $user->online = false;
        $user->save();
        Session::flush();
        Auth::guard($this->guard)->logout();
        return redirect()->to(route('web.login'))->with('status', trans('auth.logout'));
    }
}
