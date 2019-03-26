<?php

namespace EventHalls\Http\Middleware;

use Closure;

class CheckIfUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->expectsJson()) {
            return route('login.provider');
        }
    }
}

