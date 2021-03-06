<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Auth;

class CheckGuardian 
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

        if($user && 3 == $user->user_group_id){
            return $next($request);
        } 

        throw new AuthenticationException(
            'Unauthenticated.', [null], route('login')
        );
    }
}
