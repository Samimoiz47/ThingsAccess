<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Case Study - ThingsAccess</title>
    
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
    </style>
</head>
<body class="bg-black text-white">

    <!-- Background -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-gray-900 to-black"></div>
    </div>

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between w-full max-w-7xl mx-auto px-6 py-6 bg-black/50 backdrop-blur-md">
        <a href="/" class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center glass-panel">
                <div class="w-3 h-3 bg-white rounded-full"></div>
            </div>
            <span class="text-xl font-bold">THINGS ACCESS</span>
        </a>
        <a href="/portfolio" class="text-sm text-gray-400 hover:text-white transition-colors">&larr; Back to Solutions</a>
    </header>

    <!-- Project Header -->
    <section class="pt-32 pb-12 px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="mb-6">
                <span class="px-4 py-2 bg-blue-500/20 text-blue-300 text-sm font-bold rounded-full">IoT Solution</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Smart City Power Grid</h1>
            <div class="flex flex-wrap gap-6 text-gray-400 text-sm">
                <div><span class="text-white font-semibold">Client:</span> Metro City Utilities</div>
                <div><span class="text-white font-semibold">Timeline:</span> 8 months</div>
                <div><span class="text-white font-semibold">Year:</span> 2025</div>
            </div>
        </div>
    </section>

    <!-- Challenge -->
    <section class="py-12 px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">The Challenge</h2>
            <div class="space-y-4 text-gray-300 text-lg leading-relaxed">
                <p>Metro City Utilities was facing critical inefficiencies in their aging power distribution infrastructure. With over 500,000 residential and commercial customers, they had no real-time visibility into grid performance, leading to prolonged outages and reactive maintenance strategies.</p>
                <p>The existing SCADA system was 15 years old, lacked modern connectivity, and couldn't integrate with renewable energy sources being added to the grid. Power outages took an average of 4 hours to diagnose and resolve, costing the city millions in lost productivity.</p>
                <p>The utility needed a modern IoT-based monitoring system that could provide real-time data, predictive maintenance alerts, and seamless integration with their existing infrastructure—all while maintaining strict security and reliability standards for critical infrastructure.</p>
            </div>
        </div>
    </section>

    <!-- Solution -->
    <section class="py-12 px-6 relative z-10 bg-white/5">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">Our Solution</h2>
            <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                <p>ThingsAccess designed and implemented a comprehensive IoT monitoring platform that transformed Metro City's grid into a smart, responsive system.</p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4">Implementation Approach</h3>
                <ul class="space-y-3 list-disc list-inside">
                    <li><strong class="text-white">Sensor Network Deployment:</strong> Installed 2,500+ IoT sensors across substations, transformers, and distribution points</li>
                    <li><strong class="text-white">Edge Computing:</strong> Deployed edge gateways for real-time data processing and immediate fault detection</li>
                    <li><strong class="text-white">Cloud Integration:</strong> Built scalable cloud infrastructure for historical analysis and predictive modeling</li>
                    <li><strong class="text-white">Dashboard & Analytics:</strong> Created intuitive control center dashboards with AI-powered anomaly detection</li>
                    <li><strong class="text-white">Mobile Alerts:</strong> Developed field technician mobile app for instant notification and diagnostics</li>
                </ul>

                <div class="mt-8 p-6 bg-blue-500/10 border border-blue-500/30 rounded-xl">
                    <h4 class="font-bold text-white mb-3">Key Technologies Used:</h4>
                    <p>MQTT protocol, AWS IoT Core, LoRaWAN, Node.js, React, PostgreSQL, TensorFlow for predictive analytics</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Results -->
    <section class="py-12 px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-8">Results & Impact</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="glass-panel p-6 rounded-xl text-center">
                    <div class="text-5xl font-bold text-blue-400 mb-2">67%</div>
                    <div class="text-gray-400">Reduction in outage duration</div>
                </div>
                <div class="glass-panel p-6 rounded-xl text-center">
                    <div class="text-5xl font-bold text-emerald-400 mb-2">$2.4M</div>
                    <div class="text-gray-400">Annual cost savings</div>
                </div>
                <div class="glass-panel p-6 rounded-xl text-center">
                    <div class="text-5xl font-bold text-purple-400 mb-2">94%</div>
                    <div class="text-gray-400">Predictive accuracy</div>
                </div>
            </div>

            <div class="text-gray-300 text-lg space-y-4">
                <p>Within 6 months of deployment, Metro City Utilities saw dramatic improvements across all key performance indicators. Average outage resolution time dropped from 4 hours to 1.3 hours, and the system successfully predicted 94% of equipment failures before they occurred.</p>
                <p>The platform now processes over 50 million data points daily, enabling the utility to optimize load distribution, integrate renewable energy sources more effectively, and provide customers with unprecedented transparency through a public outage map.</p>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-12 px-6 relative z-10 bg-white/5">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Technology Stack</h2>
            <div class="flex flex-wrap justify-center gap-8 items-center opacity-80">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold">AWS</span>
                    </div>
                    <div class="text-sm text-gray-400">AWS IoT</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold">⚛️</span>
                    </div>
                    <div class="text-sm text-gray-400">React</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold">🟢</span>
                    </div>
                    <div class="text-sm text-gray-400">Node.js</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold">🐘</span>
                    </div>
                    <div class="text-sm text-gray-400">PostgreSQL</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold">TF</span>
                    </div>
                    <div class="text-sm text-gray-400">TensorFlow</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Quote -->
    <section class="py-12 px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="text-6xl text-blue-400 mb-6">"</div>
            <blockquote class="text-2xl md:text-3xl font-light italic leading-relaxed mb-8">
                ThingsAccess didn't just deliver a monitoring system—they transformed how we operate. The predictive capabilities have fundamentally changed our maintenance strategy, and our customers have noticed the difference.
            </blockquote>
            <div>
                <div class="font-bold text-xl">James Rodriguez</div>
                <div class="text-gray-400">CTO, Metro City Utilities</div>
            </div>
        </div>
    </section>

    <!-- Project Gallery -->
    <section class="py-12 px-6 relative z-10 bg-white/5">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Project Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="h-64 bg-gray-800 rounded-xl flex items-center justify-center text-gray-600">
                    Dashboard Screenshot
                </div>
                <div class="h-64 bg-gray-800 rounded-xl flex items-center justify-center text-gray-600">
                    Mobile App Interface
                </div>
                <div class="h-64 bg-gray-800 rounded-xl flex items-center justify-center text-gray-600">
                    Sensor Installation
                </div>
                <div class="h-64 bg-gray-800 rounded-xl flex items-center justify-center text-gray-600">
                    Control Center
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation -->
    <section class="py-12 px-6 relative z-10">
        <div class="max-w-5xl mx-auto flex justify-between items-center border-t border-white/10 pt-8">
            <a href="/portfolio/previous-project" class="flex items-center gap-2 text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Previous Project
            </a>
            <a href="/portfolio/next-project" class="flex items-center gap-2 text-gray-400 hover:text-white transition-colors">
                Next Project
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 px-6 text-center z-10 relative bg-gradient-to-t from-blue-900/20 to-transparent">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Have a Similar Project?</h2>
            <p class="text-xl text-gray-300 mb-8">Let's discuss how we can help transform your operations.</p>
            <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105">
                Get in Touch
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/10 z-10 relative bg-black">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            &copy; 2026 ThingsAccess Inc. All rights reserved.
        </div>
    </footer>

</body>
</html>
