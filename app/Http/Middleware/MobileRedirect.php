<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MobileRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userAgent = strtolower($request->header('User-Agent'));
        $screenWidth = $request->query('screen_width', 'not provided');
        $isUserAgentMobile = preg_match('/mobile|android|iphone|ipad|ipod/', $userAgent);
     
        // Check if it's a mobile browser or screen width is less than a certain px
        if ($isUserAgentMobile || (is_numeric($screenWidth) && $screenWidth < 768)) {
           
            if ($request->getHost() === 'localw.apk4.com') {
                return redirect()->to('http://localm.apk4.com' . $request->getRequestUri());
            }
        } else {
            if ($request->getHost() === 'localm.apk4.com') {
                return redirect()->to('http://localw.apk4.com' . $request->getRequestUri());
            }
        }

        return $next($request);
    }
}
