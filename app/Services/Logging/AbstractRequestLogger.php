<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;

class AbstractRequestLogger implements RequestLoggerInterface
{

    public function logRequest(Request $request): void
    {
        // TODO: Implement logRequest() method.
    }
}
