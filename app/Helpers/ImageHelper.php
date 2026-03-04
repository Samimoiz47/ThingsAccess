<?php

namespace App\Helpers;

class ImageHelper
{
    /**
     * Generate optimized image URL with WebP support and lazy loading
     */
    public static function optimizeImage(string $path, array $attributes = []): string
    {
        $defaults = [
            'loading' => 'lazy',
            'decoding' => 'async',
            'alt' => '',
            'class' => ''
        ];

        $attrs = array_merge($defaults, $attributes);
        $imageUrl = asset($path);

        // Generate WebP version if supported
        $webpUrl = self::getWebPUrl($path);

        $html = '<picture>';
        if ($webpUrl) {
            $html .= '<source srcset="' . $webpUrl . '" type="image/webp">';
        }
        $html .= '<img src="' . $imageUrl . '"';

        foreach ($attrs as $key => $value) {
            if (!empty($value)) {
                $html .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
            }
        }

        $html .= '></picture>';

        return $html;
    }

    /**
     * Generate lazy-loaded image
     */
    public static function lazyImage(string $path, string $alt = '', array $attributes = []): string
    {
        $attributes = array_merge([
            'loading' => 'lazy',
            'decoding' => 'async',
            'alt' => $alt
        ], $attributes);

        return self::optimizeImage($path, $attributes);
    }

    /**
     * Get WebP version URL if it exists
     */
    private static function getWebPUrl(string $path): ?string
    {
        $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);
        $fullPath = public_path($webpPath);

        return file_exists($fullPath) ? asset($webpPath) : null;
    }

    /**
     * Generate responsive image with multiple sizes
     */
    public static function responsiveImage(string $path, array $sizes = [], string $alt = ''): string
    {
        $imageUrl = asset($path);
        $srcset = [];

        foreach ($sizes as $size => $width) {
            $srcset[] = asset($path) . ' ' . $width . 'w';
        }

        $html = '<img src="' . $imageUrl . '"';
        if (!empty($srcset)) {
            $html .= ' srcset="' . implode(', ', $srcset) . '"';
        }
        $html .= ' sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"';
        $html .= ' alt="' . htmlspecialchars($alt) . '"';
        $html .= ' loading="lazy" decoding="async">';

        return $html;
    }
}