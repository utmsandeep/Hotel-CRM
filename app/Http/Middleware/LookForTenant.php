<?php

namespace App\Http\Middleware;

use Closure;

class LookForTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request , Closure $next)
    {
        $host = explode('.' , request()->getHttpHost());
        if(count($host) === 3 && lookfortenant($host[0]))
        {
             return $next($request);
        }
        // if(lookfortenant(explode("/" , request()->path())[1])){
        //     return $next($request);
        // }
        return redirect()->route('welcome');
       //abort(404);
        
    }
}
