<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
{
    public function handle($request, Closure $next)
    {

        if (!$request->session()->has('usuario')) {
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}
