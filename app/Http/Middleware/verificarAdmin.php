<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verificarAdmin
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
        if(session('user')->user_tipo !== 'admin'){
            return redirect('/usuario');
        }
        
        return $next($request);
    }
}
