<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {   
    
        if (! $request->expectsJson()) {

             switch($request->segment(1)){
                case 'consumer':
                    return route('tenant.index');
                    break;

                case 'admin':
                    return route('tenant.admin.login');
                    break;
                default:
                     return route('login');
            }
        }
    }
}
