<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): response
    {
        if (auth()->guest() || auth()->user()->roles !== 'staff') { //kodisi akun yang belum login
            abort(403);
        }
        return $next($request);
    }
}
