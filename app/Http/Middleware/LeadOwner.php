<?php

namespace App\Http\Middleware;

use Closure;

class LeadOwner
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
        try{
        $lead_owner = \App\Model\Tenant\Admin\LeadOwner::where('lead_id' , $request->route()->parameter('lead_id'))->where('admin_id' , auth('admin')->user()->id)->first();
        if(empty($lead_owner) && auth('admin')->user()->role != 4){

            throw new \App\Exceptions\UnauthorizedException("Unauthorized User.");
        }

        return $next($request);
        }catch(\Exception $exception){
             \Log::error($exception);
             throw new \App\Exceptions\ResourceNotFoundException($exception);
        }
    }
}
