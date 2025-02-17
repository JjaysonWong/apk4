<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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

        // Check if it's a mobile browser
        if (preg_match('/mobile|android|iphone|ipad|ipod/', $userAgent)) {
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
