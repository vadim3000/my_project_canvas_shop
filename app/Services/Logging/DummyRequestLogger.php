<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;


class DummyRequestLogger extends AbstractRequestLogger
{
    protected function prepareMessage(): string
    {
        return "Dummy Logger is not providing usefull message!";
    }

    protected function extractRequestData(Request $request): array
    {
        return ['data' => 'dummy data'];
    }

}
