<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role_name)
    {
        if(auth()->check() && !auth()->user()->have_role($role_name)){
            return redirect('pageAksesKhusus');
        }
        return $next($request);
    }
}
