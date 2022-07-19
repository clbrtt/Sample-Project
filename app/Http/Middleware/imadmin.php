<?php

namespace App\Http\Middleware;

use Closure;

class imadmin
{
    public function handle($request, Closure $next)
    {

        if(auth()->user()->admin == 1){
            return $next($request);
        }

        return redirect('login')->with('error', "You don't have admin access.");
    }
}