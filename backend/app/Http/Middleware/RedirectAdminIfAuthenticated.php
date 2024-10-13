<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Helpers\RedisCache;

class RedirectAdminIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $user_type='global', $webType='web', $status = null)
    {   
        if (Auth::guard($guard)->check()) {
            $user = Auth::guard($guard)->user();
            if ((env('APP_MAINTAIN', false) || RedisCache::getMaintainMode()) && !$user->isAdmin()) {
                abort(503, 'Under Maintenance.');
            }
            //add this
            $request->setUserResolver(function () use ($user) {
                return $user;
            });

            if ($user 
                && ($user->user_type === $user_type || $user_type == 'global') 
                && (!$status || $user->inStatus(explode('-', $status)))
                && $user->token === Session::getId()) {
                return $next($request);
            }
        }

        Auth::guard($guard)->logout();
        return redirect(route('portal.trigger'));
    }
}
