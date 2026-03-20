<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things-access-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things-access-logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - ThingsAccess</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700" rel="stylesheet" />
    <link rel="preconnect" href="https://images.unsplash.com">
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
            <a href="/portfolio" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a>
            <!-- <a href="/#services" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a> -->
            <a href="#" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">About</a>
            <a href="/contact" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Contact</a>
        </nav>

        <!-- <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a> -->
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">About ThingsAccess</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                We're a team of engineers, designers, and innovators building the future of connected enterprise solutions.
            </p>
        </div>
    </section>

    <!-- Mission, Vision & History -->
    <section class="py-16 px-6 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                    <p class="text-gray-300 leading-relaxed">
                        To empower enterprises with intelligent, scalable IoT and software solutions that transform operations, unlock new revenue streams, and create sustainable competitive advantages in the digital age.
                    </p>
                </div>

                <!-- Vision -->
                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Our Vision</h2>
                    <p class="text-gray-300 leading-relaxed">
                        To be the global leader in enterprise IoT innovation, recognized for delivering solutions that seamlessly bridge the physical and digital worlds while maintaining the highest standards of security and reliability.
                    </p>
                </div>

                <!-- History -->
                <div class="glass-card p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-emerald-500/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Our Story</h2>
                    <p class="text-gray-300 leading-relaxed">
                        Founded in 2018 by a team of MIT engineers, ThingsAccess emerged from a simple observation: enterprises needed better tools to harness IoT data. Today, we serve Fortune 500 clients across 15 countries.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values -->
    <section class="py-16 px-6 relative z-10 bg-white/5">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Excellence</h3>
                    <p class="text-gray-400 text-sm">We pursue perfection in every line of code and every client interaction.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🚀</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Innovation</h3>
                    <p class="text-gray-400 text-sm">We embrace emerging technologies and challenge conventional thinking.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🤝</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Partnership</h3>
                    <p class="text-gray-400 text-sm">Your success is our success. We build long-term relationships.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Security</h3>
                    <p class="text-gray-400 text-sm">We treat your data and infrastructure with military-grade protection.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section --> -->
    <!-- <section class="py-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    A diverse group of experts united by a passion for solving complex technical challenges.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                Team Member 1
                <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-blue-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=75" alt="Dr. Rachel Kim - CEO & Co-Founder" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Dr. Rachel Kim</h3>
                        <p class="text-blue-300 text-sm mb-3">CEO & Co-Founder</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Former MIT researcher with 15+ years in distributed systems. Led IoT initiatives at Amazon Web Services before founding ThingsAccess. PhD in Computer Science.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-purple-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=75" alt="Marcus Chen - CTO & Co-Founder" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Marcus Chen</h3>
                        <p class="text-purple-300 text-sm mb-3">CTO & Co-Founder</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Serial entrepreneur and full-stack architect. Previously built and sold two SaaS companies. Specializes in scalable cloud infrastructure and real-time data processing.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 3 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-emerald-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Sarah Patel - VP of Engineering" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Sarah Patel</h3>
                        <p class="text-emerald-300 text-sm mb-3">VP of Engineering</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Former Google engineer with expertise in machine learning and edge computing. Led teams of 50+ developers. Passionate about building developer-friendly APIs and tools.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 4 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-orange-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="James Rodriguez - Head of Product Design" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">James Rodriguez</h3>
                        <p class="text-orange-300 text-sm mb-3">Head of Product Design</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Award-winning UX designer with a background in industrial design. Previously at Apple and Tesla. Believes great software should feel invisible while solving complex problems.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 5 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-pink-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Aisha Nkrumah - Director of Security" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Aisha Nkrumah</h3>
                        <p class="text-pink-300 text-sm mb-3">Director of Security</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Cybersecurity expert with certifications in CISSP and CEH. Former consultant for government agencies. Ensures ThingsAccess maintains the highest security standards for enterprise clients.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 6 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-indigo-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Lisa Wang - VP of Customer Success" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Lisa Wang</h3>
                        <p class="text-indigo-300 text-sm mb-3">VP of Customer Success</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Customer-obsessed leader with 12 years in enterprise SaaS. Previously at Salesforce and ServiceNow. Builds world-class support teams that turn clients into advocates.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 7 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-yellow-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" alt="Tom Mitchell - Lead IoT Architect" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Tom Mitchell</h3>
                        <p class="text-yellow-300 text-sm mb-3">Lead IoT Architect</p>
                        <p class="text-gray-400 text-sm mb-4">
                            Hardware and firmware specialist with deep expertise in LoRaWAN, Zigbee, and cellular IoT. Designed sensor networks for smart cities across three continents.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 8 -->
                <!-- <div class="glass-card rounded-2xl overflow-hidden group">
                    <div class="h-80 bg-gradient-to-br from-teal-900/40 to-black relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Elena Garcia - Data Science Lead" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Elena Garcia</h3>
                        <p class="text-teal-300 text-sm mb-3">Data Science Lead</p>
                        <p class="text-gray-400 text-sm mb-4">
                            PhD in Statistics from Stanford. Builds predictive models that power our analytics platform. Published researcher in time-series forecasting and anomaly detection.
                        </p>
                        <a href="https://linkedin.com" target="_blank" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </section> -->

    <!-- CTA -->
    <section class="py-20 px-6 text-center z-10 relative bg-gradient-to-t from-blue-900/20 to-transparent">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Join Our Journey</h2>
            <p class="text-xl text-gray-300 mb-8">We're always looking for talented individuals who share our passion for innovation.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105">
                    Work With Us
                </a>
                <a href="/contact" class="inline-block px-10 py-5 bg-white/5 border border-white/20 text-white font-bold text-lg rounded-full hover:bg-white/10 transition-all">
                    Careers
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
<footer class="py-8 border-t border-white/10 z-10 relative bg-black">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
        <div class="mb-4 md:mb-0">&copy; 2026 ThingsAccess Inc. All rights reserved.</div>
        <div class="flex gap-6 items-center">
            <a href="/privacy-policy" class="hover:text-white transition-colors">Privacy Policy</a>
            <a href="/terms" class="hover:text-white transition-colors">Terms of Service</a>
            <div class="social-card">
                <div class="background">
                </div>
                <div class="logo">
                    Socials
                </div>

                <a href="#"><div class="box box1"><span class="icon"><svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                    </svg></span></div></a>

                <a href="##"><div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                      </svg></span></div></a>

                <a href="###"><div class="box box3"><span class="icon"><svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                      </svg></span></div></a>

                <div class="box box4"></div>
            </div>
        </div>
    </div>

    <style>
        /* From Uiverse.io by vinodjangid07 */
        .social-card {
          position: relative;
          width: 120px;
          height: 120px;
          background: lightgrey;
          border-radius: 30px;
          overflow: hidden;
          box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
          transition: all 1s ease-in-out;
          border: 2px solid rgb(255, 255, 255);
        }

        .social-card .background {
          position: absolute;
          inset: 0;
          background-color: #4158D0;
          background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
        }

        .social-card .logo {
          position: absolute;
          right: 50%;
          bottom: 50%;
          transform: translate(50%, 50%);
          transition: all 0.6s ease-in-out;
          font-size: 0.78em;
          font-weight: 600;
          color: #ffffff;
          letter-spacing: 3px;
        }

        .social-card .icon {
          display: inline-block;
          width: 20px;
          height: 20px;
        }

        .social-card .icon .svg {
          fill: rgba(255, 255, 255, 0.797);
          width: 100%;
          transition: all 0.5s ease-in-out;
        }

        .social-card .box {
          position: absolute;
          padding: 10px;
          text-align: right;
          background: rgba(255, 255, 255, 0.389);
          border-top: 2px solid rgb(255, 255, 255);
          border-right: 1px solid white;
          border-radius: 10% 13% 42% 0%/10% 12% 75% 0%;
          box-shadow: rgba(100, 100, 111, 0.364) -7px 7px 29px 0px;
          transform-origin: bottom left;
          transition: all 1s ease-in-out;
        }

        .social-card .box::before {
          content: "";
          position: absolute;
          inset: 0;
          border-radius: inherit;
          opacity: 0;
          transition: all 0.5s ease-in-out;
        }

        .social-card .box:hover .svg {
          fill: white;
        }

        .social-card .box1 {
          width: 70%;
          height: 70%;
          bottom: -70%;
          left: -70%;
        }

        .social-card .box1::before {
          background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #ff53d4 60%, #62c2fe 90%);
        }

        .social-card .box1:hover::before {
          opacity: 1;
        }

        .social-card .box1:hover .icon .svg {
          filter: drop-shadow(0 0 5px white);
        }

        .social-card .box2 {
          width: 50%;
          height: 50%;
          bottom: -50%;
          left: -50%;
          transition-delay: 0.2s;
        }

        .social-card .box2::before {
          background: radial-gradient(circle at 30% 107%, #91e9ff 0%, #00ACEE 90%);
        }

        .social-card .box2:hover::before {
          opacity: 1;
        }

        .social-card .box2:hover .icon .svg {
          filter: drop-shadow(0 0 5px white);
        }

        .social-card .box3 {
          width: 30%;
          height: 30%;
          bottom: -30%;
          left: -30%;
          transition-delay: 0.4s;
        }

        .social-card .box3::before {
          background: radial-gradient(circle at 30% 107%, #969fff 0%, #b349ff 90%);
        }

        .social-card .box3:hover::before {
          opacity: 1;
        }

        .social-card .box3:hover .icon .svg {
          filter: drop-shadow(0 0 5px white);
        }

        .social-card .box4 {
          width: 10%;
          height: 10%;
          bottom: -10%;
          left: -10%;
          transition-delay: 0.6s;
        }

        .social-card:hover {
          transform: scale(1.1);
        }

        .social-card:hover .box {
          bottom: -1px;
          left: -1px;
        }

        .social-card:hover .logo {
          transform: translate(42px, -31.2px);
          letter-spacing: 0px;
        }
    </style>
</footer>

</body>
</html>




