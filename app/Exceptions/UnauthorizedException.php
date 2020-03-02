<?php

namespace App\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function report()
    {

    }

    public function render($request)
    {

        return response()->view(
                'tenant.forbidden',
                array(
                    'exception' => $this
                )
        );
    }
}
