<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        $countries = [
          'Georgia',
          'France',
          'Italy'
        ];
        if(in_array($request->country, $countries)){
            return $next($request);
        }else{
            abort(403);
        }
        return $next($request);
    }
}
