<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException; // Import the TokenMismatchException class

class HandlerCustom extends ExceptionHandler
{
    // ...

    public function render($request, \Throwable $exception)
    {
        if ($exception instanceof TokenMismatchException) {
            // Redirect to the homepage or any other route you prefer
            return redirect('/');
        }

        return parent::render($request, $exception);
    }

    // ...
}