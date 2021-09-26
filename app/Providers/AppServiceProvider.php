<?php

namespace App\Providers;
use App\Services\Logging\DummyRequestLogger;
use App\Services\Logging\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface::class, function (){
            return $this->app->make(DummyRequestLogger::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
