<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;

class ProductionRequestLogger extends AbstractRequestLogger
{
    protected function prepareMessage(): string
    {
        return "Debug Request Logger is providing usefull message!";
    }

    protected function extractRequestData(Request $request): array
    {
        return [
            'ips' => $request->ips(),
            'url' => $request->fullUrl(),
        ];
    }


}
