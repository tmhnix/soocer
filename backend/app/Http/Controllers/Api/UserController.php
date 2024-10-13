<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Validator;
use Session;
class UserController extends ApiController
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function login(Request $request)
    {
        $credentials = [
            'username' => strtoupper($request->username),
            'password' => $request->password
        ];
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['invalid_email_or_password'], 422);
            }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        $user = Auth::user();
        $user->token = Session::getId();
        $user->save();
        if ($user->user_type !== User::TYPE_MEMBER) {
            Auth::guard($this->guard)->logout();
            return response([
                'code' => 'ERROR',
                'message' => 'Don\'t have permission!'
            ]);
        }

        if (!$user->inStatus([User::STATUS_ACTIVE, User::STATUS_SUSPENDED])) {
            return response([
                'code' => 'ERROR',
                'message' => 'Tài khoản đã bị khóa, vui lòng liên hệ admin'
            ]);
        }

        $user->last_ip_login = get_client_ip();
        $user->last_time_login = date("Y-m-d H:i:s");
        $user->online = true;
        $user->save();

        return response([
            'code' => 'SUCCESS',
            'token' => $token
        ]);
    }

    public function getUserInfo(Request $request)
    {
        $user = JWTAuth::toUser($request->token);
        $user->includeProfit();
        $user->includeRuningAmount();
        $user->includeRuningAmountToday();
        $user->includeRuningAmountNotToday();
        return response()->json(
            [
                'username' => $user->username,
                'last_time_login' => date('m/d/Y h:i A', strtotime($user->last_time_login)),
                'last_time_bet' => date('m/d/Y h:i A', strtotime($user->last_time_bet)),
                'wallet' => $user->wallet,
                'profit' => $user->profit,
                'runing_amount' => $user->runing_amount,
                'runing_amount_today' => $user->runing_amount_today,
                'runing_amount_not_today' => $user->runing_amount_not_today,
                'bongdamax' => $user->bongdamax,
                'bongdamin' => $user->bongdamin,
                'credit_line' => $user->credit_line
            ]
        );
    }

    public function ChangePwd(Request $req)
    {
        $errorMsg = '';
        $user = JWTAuth::toUser($req->token);

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'password' => 'required',
                'changepassword' => 'required|same:password',
            ]);
            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
                return response([
                    'code' => 'ERROR',
                    'message' => $errorMsg
                ]);
            } else {
                $errorMsg = 'Cập nhật mật khẩu thành công!!';
                $user->setPassword($req->password);
                $user->save();

                return response([
                    'code' => 'SUCCESS',
                    'message' => $errorMsg
                ]);
            }
        }
    }
}
