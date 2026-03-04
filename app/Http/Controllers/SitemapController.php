<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $posts = collect([]);
        $categories = collect([]);

        $content = view('sitemap.index', compact('posts', 'categories'))->render();

        return response($content, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=86400', // Cache for 24 hours
        ]);
    }

    public function pages(): Response
    {
        $pages = [
            ['url' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['url' => '/portfolio', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/blog', 'priority' => '0.9', 'changefreq' => 'daily'],
            ['url' => '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/services/iot', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/services/software', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/services/mobile', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        $content = view('sitemap.pages', compact('pages'))->render();

        return response($content, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    public function posts(): Response
    {
        $posts = collect([]);

        $content = view('sitemap.posts', compact('posts'))->render();

        return response($content, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
}