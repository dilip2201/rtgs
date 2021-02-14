<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class InactiveCheck
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

        if(Auth::check() && auth()->user()->status == '0'){
            Auth::guard('web')->logout();
            return redirect('/login')->with('message', 'Contact admin to active your account');
        }
        return $next($request);
    }
}
