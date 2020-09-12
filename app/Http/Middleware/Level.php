<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next, $permission)
    { 
        $levelAuth = Auth::user()->level;
        $level = explode('|', $permission);
        // dd($levelAuth);
        if (in_array($levelAuth, $level)) {
            return $next($request);
        } else {
            return redirect(Url('restrict'));
        }
    }
}
