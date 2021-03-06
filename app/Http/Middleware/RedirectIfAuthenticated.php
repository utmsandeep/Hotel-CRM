<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch($guard){
                case 'consumer':
                    return redirect(route('tenant.consumer.home'));
                    break;

                case 'admin':
                    return redirect(route('dashboard.index'));
                    break;
                default:
                    return redirect(route('home'));
            }
        }

        return $next($request);
    }
}
