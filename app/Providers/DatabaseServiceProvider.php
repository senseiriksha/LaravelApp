<?php

namespace App\Providers;

use App\DatabaseConnection;
use App\DatabaseConnectionInterface;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public $bindings = [
        DatabaseConnectionInterface::class => DatabaseConnection::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->bind(
        //     DatabaseConnectionInterface::class, DatabaseConnection::class
        // );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
