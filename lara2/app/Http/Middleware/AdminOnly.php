<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminOnly
{
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->admin!=1) {
                return 'You are not admin';
            }
        } else {
            return redirect()->to('login');
        }
        return $next($request);
    }
}
