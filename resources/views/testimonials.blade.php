<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Testimonials - ThingsAccess</title>
    
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
        }
        .filter-btn.active {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-black text-white">

    <!-- Background -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none">
        <video autoplay muted loop playsinline class="min-w-full min-h-full w-full h-full object-cover opacity-100">
            <source src="{{ asset('videos/earth_1.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/20"></div> 
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
            <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
            <a href="/contact" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Contact</a>
        </nav>

        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Client Success Stories</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                Hear directly from the enterprises we've helped transform through innovative IoT and software solutions.
            </p>
        </div>
    </section>

    <!-- Filter Bar -->
    <div class="sticky top-20 z-40 bg-black/80 backdrop-blur-md border-y border-white/10 py-4 mb-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap gap-2 justify-center">
                <button class="filter-btn active px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="all">
                    All Testimonials
                </button>
                <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="iot">
                    IoT Solutions
                </button>
                <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="enterprise">
                    Enterprise Software
                </button>
                <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="mobile">
                    Mobile Apps
                </button>
            </div>
        </div>
    </div>

    <!-- Testimonials Grid -->
    <section class="pb-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div id="testimonialsGrid" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- IoT Testimonial 1 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="iot">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">JR</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">James Rodriguez</h3>
                            <p class="text-blue-300 text-sm">CTO, Metro City Utilities</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">MCU</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-blue-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        ThingsAccess didn't just deliver a monitoring system—they transformed how we operate. The predictive capabilities have fundamentally changed our maintenance strategy, and our customers have noticed the difference. Outage times are down 67% and we're saving millions annually.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-bold rounded-full">IoT Solution</span>
                        <a href="/portfolio/smart-city-grid" class="text-sm text-blue-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Enterprise Testimonial 1 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="enterprise">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">MC</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Michael Chen</h3>
                            <p class="text-purple-300 text-sm">VP Engineering, ShopStream</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">SS</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-purple-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Their enterprise software architecture is robust and scalable. It handled our Black Friday traffic without a single hiccup. Truly world-class engineering. The team's attention to detail and commitment to performance optimization exceeded our expectations.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-bold rounded-full">Enterprise Software</span>
                        <a href="/portfolio/global-fleet-track" class="text-sm text-purple-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Mobile Testimonial 1 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="mobile">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">SJ</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Sarah Jenkins</h3>
                            <p class="text-emerald-300 text-sm">CEO, SecurePay Financial</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">SPF</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-emerald-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        The mobile app ThingsAccess built for us is a masterpiece. The biometric authentication is seamless, the UX is intuitive, and our users love it. We've seen a 45% increase in daily active users since launch. Security and user experience don't have to be at odds.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-full">Mobile App</span>
                        <a href="/portfolio/secure-pay-app" class="text-sm text-emerald-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- IoT Testimonial 2 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="iot">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">LP</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Linda Park</h3>
                            <p class="text-blue-300 text-sm">Director of Operations, SmartHome Inc</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">SHI</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-blue-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        We needed a unified IoT platform that could integrate with dozens of different smart home devices. ThingsAccess delivered exactly that. Their solution is elegant, reliable, and our customers report 98% satisfaction. The real-time sync is flawless.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-bold rounded-full">IoT Solution</span>
                        <a href="/portfolio/smart-home-hub" class="text-sm text-blue-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Enterprise Testimonial 2 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="enterprise">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">DW</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">David Williams</h3>
                            <p class="text-purple-300 text-sm">CIO, Global Logistics Prime</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">GLP</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-purple-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        The project management platform ThingsAccess built has revolutionized how our distributed teams collaborate. Real-time visibility across 15 countries, AI-powered resource allocation, and seamless integration with our existing tools. ROI was achieved in just 4 months.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-bold rounded-full">Enterprise Software</span>
                        <a href="/portfolio/project-nexus" class="text-sm text-purple-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Mobile Testimonial 2 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="mobile">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">AN</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Dr. Amanda Norton</h3>
                            <p class="text-emerald-300 text-sm">Chief Medical Officer, HealthConnect</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">HC</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-emerald-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Our telemedicine app needed to be HIPAA-compliant, user-friendly, and rock-solid reliable. ThingsAccess delivered on all fronts. The video quality is exceptional, and our patients love how easy it is to use. We've conducted over 50,000 consultations without a single security incident.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-full">Mobile App</span>
                        <a href="/portfolio/telehealth-connect" class="text-sm text-emerald-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- IoT Testimonial 3 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="iot">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">RT</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Robert Thompson</h3>
                            <p class="text-blue-300 text-sm">Farm Operations Manager, AgriTech Solutions</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">ATS</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-blue-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        The precision agriculture system ThingsAccess deployed across our 5,000-acre operation has been transformative. Soil moisture sensors, weather stations, and automated irrigation—all managed from a single dashboard. We've reduced water usage by 30% while increasing yields by 18%.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-bold rounded-full">IoT Solution</span>
                        <a href="/portfolio/agritech-monitoring" class="text-sm text-blue-300 hover:text-white transition-colors">View Case Study &rarr;</a>
                    </div>
                </div>

                <!-- Enterprise Testimonial 3 -->
                <div class="testimonial-card glass-card rounded-2xl p-8" data-category="enterprise">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold">EK</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Emily Kim</h3>
                            <p class="text-purple-300 text-sm">Head of Digital Transformation, RetailCorp</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 bg-white/10 rounded flex items-center justify-center text-xs">RC</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-4xl text-purple-400 mb-4">"</div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        ThingsAccess helped us modernize our entire inventory management system. The real-time stock tracking, predictive ordering, and supplier integration have eliminated stockouts and reduced carrying costs by 25%. Their team was professional, responsive, and truly understood our business needs.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-bold rounded-full">Enterprise Software</span>
                        <span class="text-sm text-gray-500">Case Study Coming Soon</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 px-6 text-center z-10 relative bg-gradient-to-t from-blue-900/20 to-transparent">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Join Our Success Stories?</h2>
            <p class="text-xl text-gray-300 mb-8">Let's discuss how we can help you achieve similar results.</p>
            <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105 shadow-[0_0_25px_rgba(255,255,255,0.3)]">
                Start Your Project
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

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const testimonialCards = document.querySelectorAll('.testimonial-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const filter = btn.dataset.filter;
                
                testimonialCards.forEach(card => {
                    const cardCategory = card.dataset.category;
                    if (filter === 'all' || cardCategory === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</html>
