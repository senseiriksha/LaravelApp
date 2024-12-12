<?php

use App\Http\Middleware\EnsureQueryIsPresent;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->validateCsrfTokens(except: [
        //     'genres/*'
        // ]);

        $middleware
            ->appendToGroup('admin', [EnsureTokenIsValid::class])
            ->alias([
                'admin-token' => EnsureTokenIsValid::class,
            ]);
        // $middleware->append(EnsureTokenIsValid::class);
        // $middleware->append(EnsureQueryIsPresent::class);

        $middleware->alias([
            'query-true' => EnsureQueryIsPresent::class,
            ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
