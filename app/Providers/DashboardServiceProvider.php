<?php

namespace App\Providers;

use App\DashboardIntroduction;
use App\DashboardIntroductionInterface;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(
            DashboardIntroductionInterface::class, DashboardIntroduction::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
