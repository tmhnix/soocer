<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectCodeIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $route = null)
    {   
        $user = Auth::guard('portal')->user();
        if ($user->hasLoginCode() && !$user->isSub()) {
            return $next($request);    
        }
        if ($route) {
            session(['back_url' => route($route)]);
            return response([
                'redirect' => route('portal.agent.login_code'),
                'msg' => 'Bạn chưa login code'
            ], 400);
        }
        $url = $request->url();
        
        $url = str_replace("http", "https", $url);
        
        session(['back_url' => $url]);
        return redirect(route('portal.agent.login_code'));
    }
}
