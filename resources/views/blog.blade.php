<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $metaTitle ?? 'Blog - ThingsAccess' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Latest insights on IoT, software development, and digital transformation.' }}">
    <meta property="og:title" content="{{ $ogTitle ?? 'Blog - ThingsAccess' }}">
    <meta property="og:description" content="{{ $ogDescription ?? 'Latest insights on IoT, software development, and digital transformation.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/default-og.jpg') }}">
    <meta property="og:type" content="website">
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .glass-card {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .filter-btn.active {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">

    <!-- Background -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none">
        <video autoplay muted loop playsinline class="min-w-full min-h-full w-full h-full object-cover opacity-100">
            <source src="{{ asset('videos/earth_1.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-black/10 to-black/35 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/8"></div> 
    </div>

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between w-full max-w-7xl mx-auto px-6 py-6">
        <a href="/" class="flex items-center gap-2 cursor-pointer group z-20">
            <div class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center group-hover:border-white transition-colors glass-panel">
                <div class="w-3 h-3 bg-white rounded-full shadow-[0_0_10px_rgba(255,255,255,0.8)]"></div>
            </div>
            <span class="text-xl font-bold tracking-wider text-white/90 group-hover:text-white transition-colors">THINGS ACCESS</span>
        </a>

        <nav class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 items-center space-x-1 glass-panel px-2 py-1.5 rounded-full z-20">
            <a href="/" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Home</a>
            <a href="/portfolio" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Portfolio</a>
            <a href="/#services" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a>
            <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
            <a href="#" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Blog</a>
        </nav>

        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Latest Insights</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Thought leadership, industry trends, and deep dives into the future of connected technology.</p>
        </div>
    </section>

    <!-- Filters and Search -->
    <div class="sticky top-20 z-40 bg-black/80 backdrop-blur-md border-y border-white/10 py-4 mb-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <!-- Category Filters -->
                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    <a href="{{ route('blog.index') }}" class="filter-btn {{ !$request->has('category') && !$request->has('tag') ? 'active' : '' }} px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="all">
                        All Posts
                    </a>
                    @foreach($categories as $category)
                    <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="filter-btn {{ $request->category == $category->slug ? 'active' : '' }} px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="{{ $category->slug }}">
                        {{ $category->name }} ({{ $category->posts_count }})
                    </a>
                    @endforeach
                </div>

                <!-- Search Bar -->
                <div class="relative w-full md:w-auto">
                    <input type="text" id="searchInput" placeholder="Search articles..." class="w-full md:w-64 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-white placeholder-gray-400 focus:outline-none focus:border-white/30 transition-all">
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="pb-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div id="blogGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                <article class="blog-card glass-card rounded-2xl overflow-hidden group cursor-pointer flex flex-col h-full" data-category="{{ $post->category->slug }}" data-keywords="{{ $post->tags->pluck('name')->join(' ') }}">
                    <div class="h-48 bg-gradient-to-br from-blue-900/40 to-black relative">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-white/20 text-4xl font-bold">{{ strtoupper(substr($post->title, 0, 4)) }}</div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">{{ $post->category->name }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="text-xs text-gray-400 mb-2">{{ $post->published_at->format('M j, Y') }} • {{ $post->read_time }} min read</div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-300 transition-colors">{{ $post->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4 flex-grow">{{ Str::limit($post->excerpt, 120) }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-white text-sm font-semibold hover:underline mt-auto">Read Article &rarr;</a>
                    </div>
                </article>
                @endforeach

            </div>
            
            <!-- Load More -->
            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-white/5 border border-white/20 text-white font-medium rounded-full hover:bg-white/10 transition-all">
                    Load More Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Subscription CTA -->
    <section class="py-20 px-6 relative z-10">
        <div class="max-w-4xl mx-auto glass-panel p-8 md:p-12 rounded-3xl text-center bg-gradient-to-b from-blue-900/20 to-transparent border border-white/10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Stay Ahead of the Curve</h2>
            <p class="text-gray-300 mb-8 max-w-xl mx-auto">Get the latest insights on IoT trends, enterprise software, and digital transformation delivered directly to your inbox.</p>
            
            <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" placeholder="Enter your work email" class="flex-grow px-6 py-4 bg-black/50 border border-white/20 rounded-full text-white focus:outline-none focus:border-white/50 transition-colors">
                <button type="button" class="px-8 py-4 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition-colors whitespace-nowrap">
                    Subscribe
                </button>
            </form>
            <p class="text-xs text-gray-500 mt-4">We respect your inbox. No spam, ever.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/10 z-10 relative bg-black">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <div class="mb-4 md:mb-0">&copy; 2026 ThingsAccess Inc. All rights reserved.</div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-white transition-colors">Twitter</a>
                <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script>
        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        const blogCards = document.querySelectorAll('.blog-card');

        searchInput.addEventListener('input', () => {
            filterPosts();
        });

        function filterPosts() {
            const searchTerm = searchInput.value.toLowerCase();

            blogCards.forEach(card => {
                const keywords = card.dataset.keywords.toLowerCase();
                const title = card.querySelector('h3').textContent.toLowerCase();
                const content = card.querySelector('p').textContent.toLowerCase();

                const matchesSearch = searchTerm === '' || 
                                      keywords.includes(searchTerm) || 
                                      title.includes(searchTerm) || 
                                      content.includes(searchTerm);

                if (matchesSearch) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
