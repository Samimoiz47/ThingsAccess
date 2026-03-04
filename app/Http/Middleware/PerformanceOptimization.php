<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PerformanceOptimization
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Add performance headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Only apply aggressive caching in production
        if (app()->environment('production')) {
            // Cache static assets for 1 year
            if ($request->isMethod('get') && $response->getStatusCode() === 200) {
                if (str_contains($request->getRequestUri(), '/css/') ||
                    str_contains($request->getRequestUri(), '/js/') ||
                    str_contains($request->getRequestUri(), '/images/') ||
                    str_contains($request->getRequestUri(), '/videos/')) {
                    $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
                } else {
                    // Cache pages for 1 hour
                    $response->headers->set('Cache-Control', 'public, max-age=3600');
                }
            }
        } else {
            // In development, use minimal caching to avoid delays
            $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');
        }

        return $response;
    }
}