<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NicknameMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session('nickname')) {
            $requestedChannelPath = $request->path();
            session(['requestedChannelPath' => $requestedChannelPath]);
            return redirect()->route('start');
        }
        return $next($request);
    }
}
