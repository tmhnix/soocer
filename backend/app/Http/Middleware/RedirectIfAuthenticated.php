<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Helpers\RedisCache;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $user_type = 'global', $webType = 'web', $status = null)
    {
        // abort(503, 'Under Maintenance.');
        if (Auth::guard($guard)->check()) {
            $user = Auth::guard($guard)->user();
            if ((env('APP_MAINTAIN', false) || RedisCache::getMaintainMode())) {
                abort(503, 'Under Maintenance.');
            }
            //add this
            $request->setUserResolver(function () use ($user) {
                return $user;
            });

            if (
                $user
                && ($user->user_type === $user_type || $user_type == 'global')
                && (!$status || $user->inStatus(explode('-', $status)))
                && $user->token === Session::getId()
            ) {
                return $next($request);
            }
        }
        Auth::guard($guard)->logout();
        if ($user_type === User::TYPE_MEMBER) {
            if ($webType == 'api') {
                return response([
                    'msg' => 'UNAUTHORIZE'
                ], 401);
            }
            return redirect(route('web.login'));
        }
        return redirect(route('portal.login'));
    }
}
