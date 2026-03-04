<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Main pages -->
    <sitemap>
        <loc>{{ url('/sitemap-pages.xml') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
    </sitemap>

    <!-- Blog posts -->
    <sitemap>
        <loc>{{ url('/sitemap-posts.xml') }}</loc>
        <lastmod>{{ $posts->first()?->updated_at?->toISOString() ?? now()->toISOString() }}</lastmod>
    </sitemap>
</sitemapindex>