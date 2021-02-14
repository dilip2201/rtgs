<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAccess
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
        if(Auth::user()->role == 'company') {
            return $next($request);
        }
        if(PermissionForallaccess(Auth::user()->id,$moduleid,'one'))
        {
            return $next($request);
        }else
        {
            return response()->view('admin.errors.unauthorized');
        }
    }
}
