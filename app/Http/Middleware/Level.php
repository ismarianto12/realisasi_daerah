<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure; 
use App\Helpers\Properti_app;

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
        $levelAuth = Properti_app::getlevel();  

        $level = explode('|', $permission);
        // dd($levelAuth);
        if (in_array($levelAuth, $level)) {
            return $next($request);
        } else {
            return redirect(route('restrict'));
        }
    }
}
