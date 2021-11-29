<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsreTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Ensute that our token is vaid         
        if ($request->input('csrf_token') !== (' csrf_token() ')) {
            return redirect('/');
        }
        return $next($request);
    }
}
