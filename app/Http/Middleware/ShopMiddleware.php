<?php

namespace App\Http\Middleware;

use Closure;

class ShopMiddleware
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
        if(auth()->user() != null && auth()->user()->role== 'user'){
            return $next($request);
        }

        return redirect('/login');
    }
}
