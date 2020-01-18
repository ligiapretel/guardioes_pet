<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckNgo
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

        $user = Auth::user();

        if($user && $user->user_group_id=2){
            return $next($request);
        } else {
            return redirect('/login');
        }
        
    }
}
