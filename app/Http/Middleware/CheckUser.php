<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Auth\AuthenticationException;


class CheckUser
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

        if($user){
            return $next($request);
        }

        throw new AuthenticationException(
            'Unauthenticated.', [null], route('login')
        );
    }
}
