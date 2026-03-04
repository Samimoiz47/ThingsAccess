<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IoT-Based Energy Monitoring Mobile App - ThingsAccess</title>

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
        .case-study-hero {
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.1) 0%, rgba(0, 0, 0, 0.8) 100%);
        }
        .skill-tag {
            background: rgba(249, 115, 22, 0.1);
            border: 1px solid rgba(249, 115, 22, 0.3);
            color: #f97316;
        }
        .project-image {
            border-radius: 12px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">

    <!-- Background -->
    <div class="fixed inset-0 w-full h-full overflow-hidden -z-50 bg-black pointer-events-none">
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
            <a href="/portfolio" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Solutions</a>
           <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
            <a href="/contact" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Contact</a>
        </nav>

        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="case-study-hero rounded-3xl p-12 md:p-16">
                <div class="flex items-center gap-4 mb-6">
                    <!-- <span class="px-4 py-2 bg-orange-500/20 text-orange-300 text-sm font-medium rounded-full">Mobile App</span> -->
                    <!-- <span class="text-gray-400">•</span> -->
                    <span class="text-gray-300">Published Dec 29, 2025</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6"> Energy Monitoring System</h1>
                <p class="text-xl text-gray-300 max-w-3xl">Developed a high-performance  Device & Android mobile app for energy monitoring across multiple buildings, floors, and devices. The app provides real-time energy stats via MQTT and REST APIs, with interactive dashboards for daily, monthly, and yearly analytics.</p>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="pb-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Sidebar -->
                <div class="lg:col-span-2 order-2 lg:order-1">
                    <div class="sticky top-24 space-y-8">

                        <!-- Introduction -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-gray-300"></h3>
                            <p class="text-gray-300 leading-relaxed text-base">
                                A scalable energy management platform designed for multi-facility enterprises. This app delivers granular energy consumption data across different buildings and floors, fostering sustainability and cost reduction.
                            </p>
                        </div>

                        <!-- Salient Features -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-gray-300">Salient Features</h3>
                            <ul class="list-disc list-inside text-gray-300 leading-relaxed space-y-2 text-base">
                                <li>Hierarchical monitoring (Building > Floor > Device).</li>
                                <li>Real-time energy consumption statistics (Voltage, Current, Power).</li>
                                <li>Comparative analytics (Daily, Monthly, Yearly).</li>
                                <li>Customizable energy saving goals and alerts.</li>
                                <li>User-friendly implementation for commercial and industrial setups.</li>
                            </ul>
                        </div>

                        <!-- Project Description -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-gray-300">Project Description</h3>
                            <p class="text-gray-300 leading-relaxed text-base">
                                This project delivered a sophisticated Android application for enterprise-wide energy management. The system is designed to handle complex hierarchical structures, allowing facility managers to drill down from a building level to individual devices. By collecting data via robust IoT protocols, the app presents real-time visualizations of power quality and consumption. Detailed analytics help stakeholders identify energy leaks, optimize peak load usage, and track progress against sustainability targets, ultimately driving significant operational savings.
                            </p>
                        </div>



                    </div>
                </div>

                <!-- Gallery -->
                <div class="lg:col-span-1 order-1 lg:order-2">
                    <div class="grid grid-cols-1 gap-8">
                       <!-- Image 1-->
                        <div class="project-image">
                            <img src="https://res.cloudinary.com/upwork-cloud/image/upload/c_scale,w_1000/v1767785512/catalog/2008823739124084962/m24icexwcv6g5icbbecr.jpg" alt="IoT-Based Energy Monitoring Mobile App" class="w-full h-auto">
                        </div>

                        <!-- Image 2 -->
                        <div class="project-image">
                            <img src="https://www.upwork.com/att/download/portfolio/persons/uid/1808407666023190528/profile/projects/files/0fda9f78-3fb1-4fe3-8192-471c67141897" alt="IoT-Based Energy Monitoring Mobile App" class="w-full h-auto">
                        </div>

                        <!-- Image 3 -->
                        <div class="project-image">
                            <img src="https://www.upwork.com/att/download/portfolio/persons/uid/1808407666023190528/profile/projects/files/8ac6c587-b16b-434d-bd3d-373517d7b8e6" alt="Energy Monitoring Dashboard" class="w-full h-auto">
                        </div>

                        

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Back to Portfolio -->
    <section class="pb-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto text-center">
            <a href="/portfolio" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-full text-white font-medium transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Portfolio
            </a>
        </div>
    </section>

    @include('partials.footer')

</body>
</html>
