<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictionsUsers
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
        if(auth()->user()->getRoleNames()->first()=='Comprador')
        {
            return redirect('/');
        }else{
            
            return $next($request);
        }
    }
}
