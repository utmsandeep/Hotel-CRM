<?php

namespace App\Http\Middleware;

use Closure;

class PerposalAuthClient
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
        if(!$request->session()->exists('client')){

            $hotel_code = ($request->route()->parameter('hotel_code'));
            $booking_id = ($request->route()->parameter('booking_id'));

            return redirect()->route('tenant.perposalLoginPage' , ['hotel_code'=> $hotel_code , 'booking_id'=>$booking_id]);
        }
        return $next($request);
    }
}
