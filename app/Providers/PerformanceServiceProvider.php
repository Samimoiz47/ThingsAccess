<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class PerformanceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Add image optimization directive
        Blade::directive('optimizedImage', function ($expression) {
            return "<?php echo App\Helpers\ImageHelper::optimizeImage{$expression}; ?>";
        });

        // Add lazy loading to images
        Blade::directive('lazyImage', function ($expression) {
            return "<?php echo App\Helpers\ImageHelper::lazyImage{$expression}; ?>";
        });

        // Share performance data with all views
        View::composer('*', function ($view) {
            $view->with('pageLoadTime', microtime(true) - LARAVEL_START);
        });
    }
}