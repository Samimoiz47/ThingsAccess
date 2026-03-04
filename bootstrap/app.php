<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Only apply performance middleware in production or when explicitly enabled
        if (env('APP_ENV') === 'production' || env('ENABLE_PERFORMANCE_MIDDLEWARE', false)) {
            $middleware->web(\App\Http\Middleware\PerformanceOptimization::class);
        }
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
