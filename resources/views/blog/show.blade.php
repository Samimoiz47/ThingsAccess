<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }} - ThingsAccess Blog</title>
    <meta name="description" content="{{ $post->meta_description ?? Str::limit($post->excerpt, 160) }}">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->meta_description ?? Str::limit($post->excerpt, 160) }}">
    <meta property="og:image" content="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('images/default-og.jpg') }}">
    <meta property="og:type" content="article">
    <meta property="article:published_time" content="{{ $post->published_at->toISOString() }}">
    <meta property="article:author" content="{{ $post->author->name }}">
    <meta property="article:section" content="{{ $post->category->name }}">

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
        .content h2 {
            @apply text-2xl font-bold mb-4 mt-8 text-white;
        }
        .content h3 {
            @apply text-xl font-semibold mb-3 mt-6 text-white;
        }
        .content p {
            @apply text-gray-300 mb-4 leading-relaxed;
        }
        .content ul, .content ol {
            @apply text-gray-300 mb-4 ml-6;
        }
        .content li {
            @apply mb-2;
        }
        .content blockquote {
            @apply border-l-4 border-blue-500 pl-6 my-6 text-gray-400 italic;
        }
        .content code {
            @apply bg-black/50 px-2 py-1 rounded text-sm font-mono text-green-400;
        }
        .content pre {
            @apply bg-black/50 p-4 rounded-lg overflow-x-auto my-4;
        }
        .content img {
            @apply rounded-lg my-6 max-w-full h-auto;
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">

    <!-- Background -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none">
        <video autoplay muted loop playsinline class="min-w-full min-h-full w-full h-full object-cover opacity-100">
            <source src="/videos/earth_1.mp4" type="video/mp4">
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
            <a href="/blog" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Blog</a>
        </nav>

        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a>
    </header>

    <!-- Article Header -->
    <section class="pt-32 pb-12 px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="mb-6">
                <span class="px-4 py-2 bg-blue-500/80 text-sm font-bold rounded-full">{{ $post->category->name }}</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">{{ $post->title }}</h1>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">{{ $post->excerpt }}</p>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-8 border-b border-white/10">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr($post->author->name, 0, 1)) }}
                    </div>
                    <div>
                        <div class="font-semibold text-white">{{ $post->author->name }}</div>
                        <div class="text-sm text-gray-400">{{ $post->published_at->format('M j, Y') }} • {{ $post->read_time }} min read</div>
                    </div>
                </div>

                <div class="flex items-center gap-4 text-sm text-gray-400">
                    @if($post->tags->count() > 0)
                    <div class="flex gap-2">
                        @foreach($post->tags as $tag)
                        <span class="px-3 py-1 bg-white/5 rounded-full">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="pb-20 px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            @if($post->featured_image)
            <div class="mb-12">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 md:h-96 object-cover rounded-2xl">
            </div>
            @endif

            <div class="content prose prose-lg prose-invert max-w-none">
                {!! $post->content !!}
            </div>
        </div>
    </article>

    <!-- Comments Section -->
    @if($post->comments_enabled)
    <section class="py-20 px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-12">Comments ({{ $post->comments->where('approved', true)->count() }})</h2>

            <!-- Comments List -->
            <div class="space-y-8 mb-12">
                @forelse($post->comments->where('approved', true) as $comment)
                <div class="glass-panel p-6 rounded-2xl">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-gray-500 to-gray-700 flex items-center justify-center text-white font-bold text-sm">
                            {{ strtoupper(substr($comment->author_name, 0, 1)) }}
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="font-semibold text-white">{{ $comment->author_name }}</span>
                                <span class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-gray-300">{{ $comment->content }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-12">
                    <p class="text-gray-400">No comments yet. Be the first to share your thoughts!</p>
                </div>
                @endforelse
            </div>

            <!-- Comment Form -->
            <div class="glass-panel p-8 rounded-2xl">
                <h3 class="text-2xl font-bold mb-6">Leave a Comment</h3>
                <form action="{{ route('blog.comment', $post->slug) }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name *</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-black/50 border border-white/20 rounded-lg text-white focus:outline-none focus:border-white/50 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-black/50 border border-white/20 rounded-lg text-white focus:outline-none focus:border-white/50 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-300 mb-2">Comment *</label>
                        <textarea id="content" name="content" rows="6" required class="w-full px-4 py-3 bg-black/50 border border-white/20 rounded-lg text-white focus:outline-none focus:border-white/50 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" class="px-8 py-3 bg-white text-black font-bold rounded-lg hover:bg-gray-200 transition-colors">
                        Post Comment
                    </button>
                </form>
            </div>
        </div>
    </section>
    @endif

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
    <section class="py-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedPosts as $relatedPost)
                <article class="glass-card rounded-2xl overflow-hidden group cursor-pointer flex flex-col h-full">
                    <div class="h-48 bg-gradient-to-br from-blue-900/40 to-black relative">
                        @if($relatedPost->featured_image)
                            <img src="{{ asset('storage/' . $relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-white/20 text-4xl font-bold">{{ strtoupper(substr($relatedPost->title, 0, 4)) }}</div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">{{ $relatedPost->category->name }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="text-xs text-gray-400 mb-2">{{ $relatedPost->published_at->format('M j, Y') }} • {{ $relatedPost->read_time }} min read</div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-300 transition-colors">{{ $relatedPost->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4 flex-grow">{{ Str::limit($relatedPost->excerpt, 120) }}</p>
                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="text-white text-sm font-semibold hover:underline mt-auto">Read Article &rarr;</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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

    @include('partials.analytics')
</body>
</html>