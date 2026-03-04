<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Performance Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration options for performance optimizations including caching,
    | image optimization, and other performance-related settings.
    |
    */

    'cache' => [
        'static_assets' => env('CACHE_STATIC_ASSETS', true),
        'pages' => env('CACHE_PAGES', true),
        'page_ttl' => env('PAGE_CACHE_TTL', 3600), // 1 hour
        'static_ttl' => env('STATIC_CACHE_TTL', 31536000), // 1 year
    ],

    'images' => [
        'webp_conversion' => env('ENABLE_WEBP', true),
        'lazy_loading' => env('ENABLE_LAZY_LOADING', true),
        'responsive_sizes' => [320, 640, 768, 1024, 1280, 1920],
    ],

    'compression' => [
        'gzip' => env('ENABLE_GZIP', true),
        'brotli' => env('ENABLE_BROTLI', false),
    ],

    'cdn' => [
        'enabled' => env('CDN_ENABLED', false),
        'url' => env('CDN_URL', ''),
    ],

    'monitoring' => [
        'page_load_tracking' => env('TRACK_PAGE_LOAD', true),
        'performance_metrics' => env('PERFORMANCE_METRICS', true),
    ],
];