<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class RedirectAdminIfUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $status='global')
    {   
        $user = $request->user();
        if ($status == 'global' || $user->inStatus([$status])) {
            return $next($request);
        }
        return redirect()->back()->with('script', "alert('Tài khoản của bạn đã bị khóa, vui lòng liên hệ admin');");
    }
}
