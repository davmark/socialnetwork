<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Festival
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
        $festival = Auth::guard('festival');
        if (!$festival->check())
        {
            return redirect('auth/login');
        }

        return $next($request);
    }
}