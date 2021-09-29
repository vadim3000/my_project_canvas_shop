<?php

namespace App\Providers;
use App\Services\Logging\DummyRequestLogger;
use App\Services\Logging\RequestLoggerInterface;
use App\Services\Logging\ProductionRequestLogger;
use App\Services\Logging\DebugRequestLogger;
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
            if ($this->app->environment('production'))
            {
                return  $this->app->make(ProductionRequestLogger::class);
            }
            elseif ($this->app->environment('debug'))
            {
                return  $this->app->make(DebugRequestLogger::class);
            }

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
