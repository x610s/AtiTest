<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoles
{
    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);
        if(auth()->user()->hasRoles($roles)){
        return $next($request);
        }
        return redirect('/');
    }
}
