<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
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
    })
    ->create();

if (getenv('VERCEL')) {
    $tmpBase = sys_get_temp_dir().'/laravel-runtime';
    $tmpStorage = $tmpBase.'/storage';
    $tmpBootstrap = $tmpBase.'/bootstrap';

    if (!is_dir($tmpBase)) {
        @mkdir($tmpBase, 0777, true);
    }

    @mkdir($tmpBootstrap.'/cache', 0777, true);
    @mkdir($tmpStorage.'/framework/cache/data', 0777, true);
    @mkdir($tmpStorage.'/framework/sessions', 0777, true);
    @mkdir($tmpStorage.'/framework/views', 0777, true);
    @mkdir($tmpStorage.'/logs', 0777, true);

    $app->useBootstrapPath($tmpBootstrap);
    $app->useStoragePath($tmpStorage);
}

return $app;
