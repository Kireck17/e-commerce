<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ('Comprador' == $request->user()->hasRole($role)) 
        {
            $response = $next($request);
        }
        else
        {   
            redirect 'admin/welcome';
        }

        return $response;
    }
}
