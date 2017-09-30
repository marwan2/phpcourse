<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginRequired
{

    public function handle($request, Closure $next)
    {
        if(!Auth::check())  //true, false
        {
            return redirect()->to('login');
        }

        return $next($request);
    }
}
