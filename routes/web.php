<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Portfolio Routes
Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio.index');

// Specific case study routes
Route::get('/portfolio/iot-smart-rainwater-harvesting-water-quality-monitoring-system', function () {
    return view('portfolio.iot-smart-rainwater-harvesting-water-quality-monitoring-system');
})->name('portfolio.rainwater-system');

Route::get('/portfolio/iot-smart-home-automation-system-with-mobile-web-control', function () {
    return view('portfolio.iot-smart-home-automation-system-with-mobile-web-control');
})->name('portfolio.smart-home-system');

Route::get('/portfolio/smart-trucking-logistics-mobile-application', function () {
    return view('portfolio.smart-trucking-logistics-mobile-application');
})->name('portfolio.smart-trucking-system');

Route::get('/portfolio/mobile-solar-monitoring-application', function () {
    return view('portfolio.mobile-solar-monitoring-application');
})->name('portfolio.solar-monitoring-system');

Route::get('/portfolio/nfc-industrial-tracking-app-production-monitoring', function () {
    return view('portfolio.nfc-industrial-tracking-app-production-monitoring');
})->name('portfolio.nfc-industrial-tracking-system');

Route::get('/portfolio/sentex-machine-spindle-monitoring-iot-app', function () {
    return view('portfolio.sentex-machine-spindle-monitoring-iot-app');
})->name('portfolio.sentex-machine-monitoring-system');

Route::get('/portfolio/smart-pump-turbine-management-mobile-app-solution', function () {
    return view('portfolio.smart-pump-turbine-management-mobile-app-solution');
})->name('portfolio.smart-pump-turbine-management-system');

Route::get('/portfolio/iot-based-energy-monitoring-mobile-app', function () {
    return view('portfolio.iot-based-energy-monitoring-mobile-app');
})->name('portfolio.iot-based-energy-monitoring-mobile-app');

Route::get('/portfolio/smart-irrigation-system', function () {
    return view('portfolio.smart-irrigation-system');
})->name('portfolio.smart-irrigation-system');

Route::get('/portfolio/{slug}', function ($slug) {
    return view('portfolio.show', ['slug' => $slug]);
})->name('portfolio.show');

// Service Routes
Route::get('/services/iot', function () {
    return view('services.iot');
})->name('services.iot');

Route::get('/services/software', function () {
    return view('services.software');
})->name('services.software');

Route::get('/services/mobile', function () {
    return view('services.mobile');
})->name('services.mobile');

Route::get('/services/smart-home-automation', function () {
    return view('services.smart-home-automation');
})->name('services.smart-home-automation');

Route::get('/services/solar-monitoring', function () {
    return view('services.solar-monitoring');
})->name('services.solar-monitoring');

Route::get('/services/agriculture-farming', function () {
    return view('services.agriculture-farming');
})->name('services.agriculture-farming');

Route::get('/services/security-solutions', function () {
    return view('services.security-solutions');
})->name('services.security-solutions');

// Contact Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// About Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Expertise Route
Route::get('/expertise', function () {
    return view('expertise');
})->name('expertise');

// Testimonials Route
Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

// Blog Routes
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{slug}/comment', [App\Http\Controllers\BlogController::class, 'storeComment'])->name('blog.comment');

// SEO Routes
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap-posts.xml', [App\Http\Controllers\SitemapController::class, 'posts'])->name('sitemap.posts');
Route::get('/sitemap-pages.xml', [App\Http\Controllers\SitemapController::class, 'pages'])->name('sitemap.pages');

// Legal Routes
Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Fallback for 404

Route::get('/test', function () {
    return view('test');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
