<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - ThingsAccess</title>
    
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
        .project-card {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }
        .project-card .overlay {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .project-card:hover .overlay {
            opacity: 1;
        }
        .filter-btn.active {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
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
            <a href="#" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all">Solutions</a>
            <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
            <a href="/contact" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Contact</a>
            <!-- <a href="/#services" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a> -->

        </nav>
<!-- 
        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a> -->
    </header>

    <!-- Page Header -->
    <section class="pt-32 pb-16 px-6 relative z-10">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Our Portfolio</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Explore our showcase of innovative IoT, enterprise software, and mobile solutions that drive real business transformation.</p>
        </div>
    </section>

    <!-- Sticky Filter Bar -->
    <div class="sticky top-20 z-40 bg-black/80 backdrop-blur-md border-y border-white/10 py-4 mb-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <!-- Category Filters -->
                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    <button class="filter-btn active px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="all">
                        All Projects
                    </button>
                    <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="iot">
                        IoT & Smart Home
                    </button>
                    <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="enterprise">
                        Enterprise Software
                    </button>
                    <button class="filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="mobile">
                        Mobile Apps
                    </button>
                </div>

                <!-- Search Bar -->
                <div class="relative w-full md:w-auto">
                    <input type="text" id="searchInput" placeholder="Search projects..." class="w-full md:w-64 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-white placeholder-gray-400 focus:outline-none focus:border-white/30 transition-all">
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Grid -->
    <section class="pb-20 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div id="projectGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project Card 1 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="iot" data-keywords="iot smart rainwater harvesting water quality monitoring web application mobile app lora linux mqtt">
                    <div class="relative h-64 bg-gradient-to-br from-blue-900/40 to-black overflow-hidden">
                        <img src="{{ asset('images/Sec 1 Portfolio.png') }}" alt="IoT Smart rainwater harvesting & water quality monitoring system" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="{{ route('portfolio.rainwater-system') }}" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2"> Smart rainwater harvesting & water quality monitoring system</h3>
                        <p class="text-gray-400 text-sm mb-3">Developed a complete IoT solution for monitoring and managing rainwater harvesting systems. Built Web and Mobile apps for real-time sensor data, alerts, and ticket management, with data transmitted via MQTT and LoRaWAN.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="iot" data-keywords="iot smart home automation mobile web control hardware firmware alexa energy consumption">
                    <div class="relative h-64 bg-gradient-to-br from-blue-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 2 Portfolio.png') }}" alt="5 Gang with Dimmer Smart Switch" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/iot-smart-home-automation-system-with-mobile-web-control" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Home Automation System </h3>
                        <p class="text-gray-400 text-sm mb-3">Things Access has designed and developed a complete smart home system, including hardware and firmware for smart switches, along with integration of commercial off-the-shelf smart devices through a central hub. This hub enables seamless home automation both remotely and locally in offline mode. The user-friendly mobile app supports Alexa voice commands and provides detailed insights into home energy consumption.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="mobile" data-keywords="smart trucking logistics mobile app firebase google maps gps ui design">
                    <div class="relative h-64 bg-gradient-to-br from-emerald-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 3 Portfolio.png') }}"alt="Smart Trucking & Logistics Mobile Application" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/smart-trucking-logistics-mobile-application" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-emerald-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Trucking & Logistics System</h3>
                        <p class="text-gray-400 text-sm mb-3">I designed and developed a complete trucking and logistics mobile application to streamline freight booking, driver management, and shipment tracking. The solution connects shippers, drivers, and trucking companies on a single platform with features like load posting, bidding and fixed pricing, real-time tracking, secure payments, in-app chat, delivery confirmation, and notifications.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 4 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="mobile" data-keywords="mobile solar monitoring app ux ui api integration app development app design mqtt sftp">
                    <div class="relative h-64 bg-gradient-to-br from-yellow-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 4.1 Portfolio.png') }}" alt="Mobile Solar Monitoring Application" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/mobile-solar-monitoring-application" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-yellow-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Mobile Solar Monitoring System</h3>
                        <p class="text-gray-400 text-sm mb-3">The goal of this project was to develop a high-performance mobile application for solar energy monitoring. It features a clean dashboard displaying real-time energy data, system status, alerts, and performance insights. The app supports MQTT for live updates, remote firmware updates, log uploads, and secure SFTP data transfer, enabling easy monitoring, maintenance, and troubleshooting.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 5 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="mobile" data-keywords="nfc industrial tracking app real-time production monitoring mobile app development hardware design api integration system monitoring">
                    <div class="relative h-64 bg-gradient-to-br from-purple-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/nfc.png') }}" alt="NFC Industrial Tracking App for Real-Time Production Monitoring" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/nfc-industrial-tracking-app-production-monitoring" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-purple-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">NFC Industrial Tracking System for Real-Time Production Monitoring</h3>
                        <p class="text-gray-400 text-sm mb-3"> A high-performance Android mobile app for real-time monitoring of machines, operators, and production bundles using NFC. Operators can check-in/check-out, assign and track bundles, and receive instant alerts for delays or faults. Real-time dashboards provide actionable insights for managers, improving efficiency, reducing errors, and optimizing productivity.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 6 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="iot" data-keywords="sentex machine spindle monitoring iot app mqtt rest apis electrical load rpm temperature spindle status performance graphs mobile app operators managers anomaly detection industrial automation">
                    <div class="relative h-64 bg-gradient-to-br from-cyan-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 6.1 Portfolio.png') }}" alt="Sentex Machine & Spindle Monitoring IoT App" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/sentex-machine-spindle-monitoring-iot-app" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-cyan-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Sentex Machine & Spindle Monitoring IoT System</h3>
                        <p class="text-gray-400 text-sm mb-3">Developed a complete IoT solution for real-time machine monitoring. Integrated MQTT and REST APIs to track electrical load, RPM, temperature, spindle status, and historical performance graphs. Delivered a mobile app for operators and managers to monitor machines efficiently, detect anomalies quickly, and optimize industrial operations.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 7 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="mobile" data-keywords="smart pump turbine management mobile app solution kotlin mqtt dashboard mobile app api integration real-time monitoring control scheduling device status notifications historical data operational decisions">
                    <div class="relative h-64 bg-gradient-to-br from-teal-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 7.1 Portfolio.png') }}" alt="Smart Pump & Turbine Management – Mobile App Solution" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/smart-pump-turbine-management-mobile-app-solution" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-teal-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Pump & Turbine Management System</h3>
                        <p class="text-gray-400 text-sm mb-3">Developed a high-performance mobile app for smart pump and turbine management, enabling real-time monitoring, control, and scheduling of multiple devices. Integrated MQTT for live updates and RESTful APIs for data management. Users can view device status, receive notifications, track historical data, and make data-driven operational decisions.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 8 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="mobile" data-keywords="iot-based energy monitoring mobile app android developer iot integration specialist high-performance android mobile app energy monitoring buildings floors devices real-time energy stats mqtt rest apis interactive dashboards daily monthly yearly analytics track consumption identify inefficiencies optimize energy usage scalable user-friendly mobile solution industrial commercial energy management">
                    <div class="relative h-64 bg-gradient-to-br from-orange-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 8 Portfolio.png') }}" alt="IoT-Based Energy Monitoring Mobile App" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/iot-based-energy-monitoring-mobile-app" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-orange-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2"> Energy Monitoring System</h3>
                        <p class="text-gray-400 text-sm mb-3">Developed a high-performance Android mobile app for energy monitoring across multiple buildings, floors, and devices. The app provides real-time energy stats via MQTT and REST APIs, with interactive dashboards for daily, monthly, and yearly analytics. It helps users track consumption, identify inefficiencies, and optimize energy usage.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 9 -->
                <div class="project-card rounded-2xl overflow-hidden group cursor-pointer" data-category="iot" data-keywords="smart irrigation system chief technology officer field sensors soil moisture acidity level temperature environment variables irrigation pesticides smart solenoid valve water management crop production labor work mobile real-time monitoring remote control valves lorawan wireless interface hardware prototyping mobile app artificial intelligence lora web portal">
                    <div class="relative h-64 bg-gradient-to-br from-green-900/40 to-black overflow-hidden">
                        <img src="https://www.upwork.com/att/download/portfolio/persons/uid/1808407666023190528/profile/projects/files/0c198c4b-cce2-4c00-a466-13f9e78999db" alt="Smart Irrigation System" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/smart-irrigation-system" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-green-500/80 text-xs font-bold rounded-full">IoT Solution</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Irrigation System</h3>
                        <p class="text-gray-400 text-sm mb-3">We designed and developed smart irrigation system that comprises of field sensors to monitor soil moisture, acidity level, temperature, and other environment variables in order to identify the needs of irrigation and pesticides. The system also includes smart solenoid valve based water management to irrigate the field based on the sensors report for a particular crop to enhance the production and reduce the labor work.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.footer')
          transform: translate(42px, -31.2px);

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');
        const searchInput = document.getElementById('searchInput');

        // Check URL for initial filter
        const urlParams = new URLSearchParams(window.location.search);
        const initialCategory = urlParams.get('category') || 'all';
        
        // Set initial active button
        filterBtns.forEach(btn => {
            if (btn.dataset.filter === initialCategory) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Initial filter
        filterProjects(initialCategory, '');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const filter = btn.dataset.filter;
                filterProjects(filter, searchInput.value);

                // Update URL
                const url = new URL(window.location);
                if (filter === 'all') {
                    url.searchParams.delete('category');
                } else {
                    url.searchParams.set('category', filter);
                }
                window.history.pushState({}, '', url);
            });
        });

        searchInput.addEventListener('input', (e) => {
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
            filterProjects(activeFilter, e.target.value);
        });

        function filterProjects(category, searchTerm) {
            projectCards.forEach(card => {
                const cardCategory = card.dataset.category;
                const cardKeywords = card.dataset.keywords.toLowerCase();
                const matchesCategory = category === 'all' || cardCategory === category;
                const matchesSearch = searchTerm === '' || cardKeywords.includes(searchTerm.toLowerCase());

                if (matchesCategory && matchesSearch) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Load More (placeholder - would connect to backend pagination)
        document.getElementById('loadMoreBtn').addEventListener('click', () => {
            alert('Load more functionality would fetch additional projects from the backend');
        });
    </script>

</body>
</html>
          letter-spacing: 0px;
        }
    </style>
</footer>
