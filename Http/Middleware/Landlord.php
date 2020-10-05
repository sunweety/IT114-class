<?php

namespace App\Http\Middleware;

use Closure;

class Landlord
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
        if (auth()->user()->type == 2) {
            return $next($request);
        }

        return redirect('home')->with('error', "Only landlord can access!");
    }
}