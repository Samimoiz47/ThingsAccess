<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IoT Solutions - ThingsAccess</title>
    
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
            transition: all 0.4s ease;
        }
        .glass-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-black text-white">

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
            <a href="#" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Solutions</a>
            <a href="/#insights" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Insights</a>
        </nav>

        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="mb-6">
                <span class="px-4 py-2 bg-blue-500/20 text-blue-300 text-sm font-bold rounded-full">Our Expertise</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">IoT & Smart Home Automation Solutions</h1>
            <p class="text-xl md:text-2xl text-gray-300 leading-relaxed max-w-3xl">
                Transform your physical infrastructure into an intelligent, connected ecosystem. We design and deploy enterprise-grade IoT solutions that deliver real-time insights and operational excellence.
            </p>
        </div>
    </section>

    <!-- Service Description -->
    <section class="py-16 px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">What We Deliver</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">End-to-End IoT Architecture</h3>
                    <p class="text-gray-400">From sensor selection to cloud integration, we design complete IoT ecosystems tailored to your operational needs.</p>
                </div>

                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Real-Time Data Processing</h3>
                    <p class="text-gray-400">Edge computing and cloud analytics for instant insights and automated decision-making at scale.</p>
                </div>

                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Enterprise Security</h3>
                    <p class="text-gray-400">Military-grade encryption, secure device provisioning, and compliance with industry standards.</p>
                </div>

                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Predictive Analytics</h3>
                    <p class="text-gray-400">AI-powered insights that anticipate failures, optimize performance, and reduce operational costs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enterprise Benefits -->
    <section class="py-16 px-6 relative z-10 bg-white/5">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Enterprise Benefits</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-400 mb-3">40%</div>
                    <div class="text-gray-400">Average reduction in operational costs</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-emerald-400 mb-3">24/7</div>
                    <div class="text-gray-400">Continuous monitoring & alerts</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-purple-400 mb-3">99.9%</div>
                    <div class="text-gray-400">System uptime guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="py-16 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-2">Related Projects</h2>
                    <p class="text-gray-400">See how we've delivered IoT solutions for enterprises like yours</p>
                </div>
                <a href="/portfolio?filter=iot" class="hidden md:inline-flex items-center text-gray-300 hover:text-white transition-colors">
                    View All IoT Projects 
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer">
                    <div class="relative h-64 bg-gradient-to-br from-blue-900/40 to-black overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-white/10 text-6xl font-black">GRID</div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart City Power Grid</h3>
                        <p class="text-gray-400 text-sm mb-4">Real-time monitoring for municipal energy distribution</p>
                        <a href="/portfolio/smart-city-grid" class="text-blue-300 hover:text-white text-sm font-medium">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer">
                    <div class="relative h-64 bg-gradient-to-br from-blue-900/40 to-black overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-white/10 text-6xl font-black">HOME</div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Home Hub</h3>
                        <p class="text-gray-400 text-sm mb-4">Unified control system for residential automation</p>
                        <a href="/portfolio/smart-home-hub" class="text-blue-300 hover:text-white text-sm font-medium">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer">
                    <div class="relative h-64 bg-gradient-to-br from-blue-900/40 to-black overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-white/10 text-6xl font-black">FARM</div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">AgriTech Monitoring</h3>
                        <p class="text-gray-400 text-sm mb-4">Precision agriculture with soil & climate sensors</p>
                        <a href="/portfolio/agritech-monitoring" class="text-blue-300 hover:text-white text-sm font-medium">View Case Study &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 px-6 text-center z-10 relative bg-gradient-to-t from-blue-900/20 to-transparent">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Have a Similar Project?</h2>
            <p class="text-xl text-gray-300 mb-8">Let's discuss how our IoT expertise can transform your operations and unlock new value from your connected devices.</p>
            <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105 shadow-[0_0_25px_rgba(255,255,255,0.3)]">
                Start Your IoT Journey
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/10 z-10 relative bg-black">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <div class="mb-4 md:mb-0">&copy; 2026 ThingsAccess Inc. All rights reserved.</div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>
