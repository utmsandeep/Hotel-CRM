<?php

namespace App\Exceptions;

use Exception;

class ResourceNotFoundException extends Exception
{
	public function report()
    {

    }

    public function render($request)
    {

        return response()->view(
                'tenant.not-found',
                array(
                    'exception' => $this
                )
        );
    }
}
