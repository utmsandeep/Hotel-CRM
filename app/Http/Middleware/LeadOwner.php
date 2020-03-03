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
            $lead = \App\Model\Tenant\Admin\Lead::find($request->route()->parameter('lead_id'));
            if(!$lead)
                throw new \App\Exceptions\ResourceNotFoundException();
                
            $lead_owner = $lead->leadOwners->where('admin_id' , auth('admin')->user()->id)->first();
            if(empty($lead_owner) && auth('admin')->user()->role != 4){

                throw new \App\Exceptions\UnauthorizedException();
            }
            return $next($request);

        }catch(\App\Exceptions\ResourceNotFoundException $exception){
             \Log::error($exception);
             throw new \App\Exceptions\ResourceNotFoundException($exception);
        }catch(\App\Exceptions\UnauthorizedException $exception){
             \Log::error($exception);
             throw new \App\Exceptions\UnauthorizedException($exception);
        }catch(\Exception $exception){
             \Log::error($exception);
             return $exception->getMessage();
        }
    }
}
