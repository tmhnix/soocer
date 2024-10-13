<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Components\SessionStore;

class RedirectDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $layout = $request->layout;
        if ($layout == null) {
            $layout = SessionStore::getLayout();
        }
        $url = request()->getHost();
        $ignored = ['viva89ag.com','cado88ag.com'];
        if(in_array($url, $ignored)) {
            return $next($request);
        }

        $agent = new \Jenssegers\Agent\Agent;
    
        // $result = $agent->isMobile();
        $result = $agent->isPhone();
        if ($result) {
            if (!Str::startsWith($url, 'm.')) { 
                if (!$layout) {
                    SessionStore::setLayout('mobile');
                    return redirect('https://m.' . $url);
                }
                if ($layout == 'mobile') {
                    return redirect('https://m.' . $url);
                }
                SessionStore::setLayout('desktop');
                return $next($request);
            }
            return $next($request);
        }

        return $next($request);
    }
}
