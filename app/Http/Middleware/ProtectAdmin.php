<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProtectAdmin
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
        if ($request->is('admin/*') && auth()->check() && $request->user()->role != 'admin'){
            return redirect()->route('unAuthorizedAccess');
        }
        elseif ($request->is('admin/*') && !auth()->check()){
            return redirect()->route('adminLogin');
        }
        return $next($request);
    }
}
