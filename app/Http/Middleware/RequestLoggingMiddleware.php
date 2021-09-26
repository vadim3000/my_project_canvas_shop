<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;


class RequestLoggingMiddleware
{

    public function handle(Request $request, \Closure $next)
    {
        \Log::info('test');

        return $next($request);
    }
}
