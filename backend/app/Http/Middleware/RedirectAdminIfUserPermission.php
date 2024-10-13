<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectAdminIfUserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $name)
    {   
        $user = $request->user();
        if ($user->can($name)){
            return $next($request);
        };
        abort(403, 'Unauthorized action.');
    }
}
