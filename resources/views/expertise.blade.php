<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things-access-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things-access-logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Expertise - ThingsAccess - IoT Solutions & Enterprise Software</title>
    <meta name="description" content="Explore our expertise in IoT solutions including Smart Home Automation, Solar Monitoring, Agriculture Farming, and Security Solutions.">
    <meta name="keywords" content="IoT expertise, smart home automation, solar monitoring, agriculture farming, security solutions">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        .glass-card {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .glass-card:hover {
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px) scale(1.02);
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
        }
    </style>
<!-- </head>
<body class="antialiased text-white overflow-x-hidden bg-black">

    @include('partials.navbar')

    <!-- Background Theme -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none" aria-hidden="true">
        <video autoplay muted loop playsinline class="min-w-full min-h-full w-full h-full object-cover opacity-100" preload="metadata">
            <source src="/videos/earth_1.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-black/10 to-black/35 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/8"></div>
    </div>

    <!-- Expertise Details -->
    <section class="py-20 px-6 max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Expertise</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">We specialize in cutting-edge IoT technologies and enterprise software development, connecting physical assets to the digital world.</p>
        </div>

        <!-- Smart Home Automation -->
        <article class="glass-card rounded-2xl p-10 md:p-16 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="w-full h-80 mb-6 rounded-lg overflow-hidden">
                        <img src="https://thingsaccess.com/assets/images/service/smartHome.jpg" alt="Smart Home Automation" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <h3 class="text-4xl font-bold mb-4 text-blue-400">Smart Home Automation</h3>
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Our Smart Home System provides energy efficiency, safety, reliability, convenience and remote access to all household electrical and electronic devices. We integrate advanced sensors, AI-powered automation, and secure cloud connectivity to create intelligent living spaces.
                    </p>
                    <ul class="space-y-2 text-gray-300">
                        <li>• Energy management and optimization</li>
                        <li>• Remote monitoring and control</li>
                        <li>• Security and safety automation</li>
                        <li>• Voice-activated controls</li>
                        <li>• Predictive maintenance alerts</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- Solar Monitoring -->
        <article class="glass-card rounded-2xl p-10 md:p-16 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-4xl font-bold mb-4 text-purple-400">Solar Monitoring</h3>
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Our solar monitoring system provides automatic tuning and configurations of hybrid inverters operational parameters, load management and scheduling. Real-time data analytics help optimize energy production and reduce operational costs.
                    </p>
                    <ul class="space-y-2 text-gray-300">
                        <li>• Real-time performance monitoring</li>
                        <li>• Automated system optimization</li>
                        <li>• Predictive maintenance</li>
                        <li>• Energy production analytics</li>
                        <li>• Remote diagnostics and troubleshooting</li>
                    </ul>
                </div>
                <div>
                    <div class="w-full h-80 mb-6 rounded-lg overflow-hidden">
                        <img src="https://thingsaccess.com/assets/images/service/solar.jpg" alt="Solar Monitoring" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </article>

        <!-- Agriculture Farming -->
        <article class="glass-card rounded-2xl p-10 md:p-16 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="w-full h-80 mb-6 rounded-lg overflow-hidden">
                        <img src="https://thingsaccess.com/assets/images/service/agri-img.png" alt="Agriculture Farming" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <h3 class="text-4xl font-bold mb-4 text-emerald-400">Agriculture Farming</h3>
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Our smart agriculture farming system comprises custom sensor modules that monitor soil moisture, acidity level, temperature, and other environmental factors. Advanced analytics provide actionable insights for precision farming.
                    </p>
                    <ul class="space-y-2 text-gray-300">
                        <li>• Soil health monitoring</li>
                        <li>• Climate and weather tracking</li>
                        <li>• Automated irrigation systems</li>
                        <li>• Crop yield optimization</li>
                        <li>• Pest and disease detection</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- Security Solutions -->
        <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-red-400">Security Solutions</h3>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Our Smart Security solutions provide comprehensive protection through IoT-enabled surveillance, access control, and threat detection systems. Advanced AI algorithms ensure proactive security measures and rapid response capabilities.
                    </p>
                    <ul class="space-y-2 text-gray-300">
                        <li>• IoT-based surveillance systems</li>
                        <li>• Access control and authentication</li>
                        <li>• Threat detection and alerts</li>
                        <li>• Video analytics and monitoring</li>
                        <li>• Emergency response integration</li>
                    </ul>
                </div>
                <div>
                    <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                        <img src="https://thingsaccess.com/assets/images/service/IoT security solutions.jpg" alt="Security Solutions" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </article>

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105 shadow-[0_0_25px_rgba(255,255,255,0.3)]">
                Discuss Your Project
            </a>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="py-20 px-6 max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Solutions</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Discover our range of innovative IoT devices designed for smart homes, agriculture, and industrial applications.</p>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <!-- Irrify Sensor -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/irrify-sensor.png" alt="Irrify Sensor - Soil moisture monitoring device" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-blue-400">Irrify Sensor</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The Irrify Sensor is a cutting-edge IoT device engineered for precision agriculture. It provides continuous monitoring of soil moisture levels, temperature, pH, and conductivity to deliver real-time insights for optimal irrigation management. By integrating advanced sensors with our cloud-based platform, it enables farmers to reduce water consumption by up to 30%, improve crop yields through data-driven decisions, and prevent issues like overwatering or drought stress. The sensor features wireless connectivity, long battery life, and easy installation, making it ideal for both small farms and large agricultural operations.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Invertlyzer -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-purple-400">Invertlyzer</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The Invertlyzer is an advanced solar inverter monitoring and optimization system designed to maximize the efficiency and performance of solar energy installations. It continuously monitors key parameters such as voltage, current, power output, and system efficiency in real-time. By integrating with our cloud platform, it provides predictive analytics to identify potential issues before they impact energy production. The system supports automatic load management, remote diagnostics, and performance optimization algorithms that can increase overall energy yield by up to 15%. Ideal for residential, commercial, and industrial solar installations, the Invertlyzer ensures optimal return on investment for solar energy systems.
                        </p>
                    </div>
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/RMS.png" alt="Invertlyzer - Solar inverter monitoring system" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </article>

            <!-- 3 Gang Switch -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/mini.png" alt="3 Gang Switch - Smart home automation switch" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-emerald-400">3 Gang Switch</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The 3 Gang Switch is a versatile smart home automation device that provides seamless control over multiple electrical appliances with voice-activated commands and advanced energy monitoring capabilities. Featuring three independent switches, it allows users to control lights, fans, and other devices individually or simultaneously through smartphone apps, voice assistants like Alexa and Google Home, or automated schedules. The device includes real-time energy consumption tracking, helping users optimize electricity usage and reduce costs. With its compact design, easy installation, and compatibility with major smart home ecosystems, the 3 Gang Switch transforms any space into an intelligent, energy-efficient environment while providing unparalleled convenience and control.
                        </p>
                    </div>
                </div>
            </article>

            <!-- 6 Gang Switch -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-red-400">6 Gang Switch</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The 6 Gang Switch represents the pinnacle of smart home automation technology, offering comprehensive control over an entire household's electrical infrastructure. With six fully independent switches, this advanced hub enables granular management of lighting systems, appliances, HVAC units, and entertainment devices. Users can create complex automation scenarios, set schedules, and integrate with voice assistants for hands-free operation. The device features advanced energy analytics, providing detailed consumption reports and optimization recommendations. Its robust design supports high-power loads and includes safety features like overload protection and surge suppression. Perfect for large homes or commercial spaces, the 6 Gang Switch serves as the central nervous system of a truly intelligent building, delivering unmatched flexibility, reliability, and energy efficiency.
                        </p>
                    </div>
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/multi.png" alt="6 Gang Switch - Advanced home automation hub" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </article>

            <!-- Sensor -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/sensor.png" alt="Multi-Sensor - Comprehensive environmental monitoring sensor" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-blue-400">Multi-Sensor</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The Multi-Sensor is a sophisticated environmental monitoring device that combines multiple sensing technologies into a single, compact unit. It continuously measures temperature, humidity, motion detection, and air quality parameters including VOCs, CO2 levels, and particulate matter. The sensor integrates seamlessly with our IoT platform to provide real-time data visualization and automated alerts for environmental changes. Advanced algorithms analyze sensor data to predict comfort levels, detect potential health hazards, and optimize HVAC system performance. With wireless connectivity, long battery life, and easy wall mounting, the Multi-Sensor is perfect for smart homes, offices, and industrial environments where comprehensive environmental monitoring is essential for occupant comfort, safety, and energy efficiency.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Power Plug -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-purple-400">Smart Power Plug</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The Smart Power Plug is an intelligent Wi-Fi enabled device that transforms any electrical appliance into a smart, controllable device with comprehensive energy monitoring capabilities. It provides real-time power consumption tracking, allowing users to monitor electricity usage down to the watt-hour and receive detailed reports on energy patterns. The plug supports remote control through smartphone apps, enabling users to turn devices on/off from anywhere, set schedules for automated operation, and create energy-saving routines. Advanced features include surge protection, overload detection, and compatibility with major smart home platforms like Alexa, Google Home, and Apple HomeKit. With its compact design, easy installation, and robust build quality, the Smart Power Plug is ideal for managing appliances, optimizing energy costs, and enhancing home automation systems.
                        </p>
                    </div>
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/power-plug.png" alt="Smart Power Plug - Wi-Fi enabled smart plug" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </article>

            <!-- IR Sensor -->
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://thingsaccess.com/assets/images/product/ir.png" alt="IR Sensor - Infrared motion detection sensor" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-emerald-400">IR Sensor</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            The IR Sensor is an advanced infrared motion and presence detection device that provides intelligent occupancy sensing for smart buildings and automation systems. Utilizing passive infrared (PIR) technology, it accurately detects human movement and presence within its field of view, enabling automated lighting control, security monitoring, and energy-saving applications. The sensor features adjustable sensitivity settings, multiple detection zones, and immunity to false triggers from pets or environmental factors. With wireless connectivity and integration capabilities with major smart home platforms, the IR Sensor supports complex automation scenarios including scheduled operations, zone-based control, and integration with HVAC systems for optimal energy efficiency. Its compact design allows for discreet installation in various environments, from residential spaces to commercial buildings, making it an essential component for modern smart infrastructure.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Latest Insights Section -->
    <section class="py-20 px-6 max-w-7xl mx-auto relative z-10">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-4xl md:text-6xl font-bold mb-6">Latest Insights</h2>
                <p class="text-gray-400">Trends and analysis from our engineering team</p>
            </div>
            <a href="/blog" class="hidden md:inline-flex items-center text-gray-300 hover:text-white transition-colors">View All Articles <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Edge Computing in Manufacturing" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-blue-400">The Future of Edge Computing in Manufacturing</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Edge computing is transforming the manufacturing landscape by bringing computational power directly to the factory floor. By processing data at the source rather than relying on centralized cloud servers, manufacturers can achieve unprecedented levels of real-time analytics, dramatically reduce latency in critical decision-making processes, and significantly improve operational efficiency. This paradigm shift enables predictive maintenance algorithms to run locally on edge devices, allowing for immediate anomaly detection and automated responses to potential equipment failures. Furthermore, edge computing supports enhanced cybersecurity by minimizing data transmission to external networks, reducing vulnerability to cyber threats. As Industry 4.0 continues to evolve, edge computing will play a pivotal role in enabling smart factories that can adapt autonomously to changing production demands, optimize resource utilization, and maintain continuous operation with minimal downtime.
                        </p>
                        <a href="/blog/the-future-of-edge-computing-in-manufacturing" class="text-sm font-medium text-blue-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                </div>
            </article>
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-purple-400">Scaling Microservices for Enterprise</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Scaling microservices architecture in enterprise environments requires a strategic approach that balances flexibility with reliability. While microservices offer unparalleled scalability and development velocity by allowing teams to work independently on discrete business capabilities, they introduce complex challenges in service discovery, inter-service communication, and distributed system management. Best practices include implementing robust API gateways for centralized request routing and authentication, adopting container orchestration platforms like Kubernetes for automated deployment and scaling, and establishing comprehensive monitoring and observability frameworks. Service mesh technologies such as Istio provide essential capabilities for traffic management, security policies, and resilience patterns. Additionally, organizations must invest in DevOps culture and automation to maintain system stability as the number of services grows. Careful consideration of data consistency patterns, circuit breaker implementations, and graceful degradation strategies ensures that enterprise-grade reliability is maintained even as the system scales to handle millions of requests per minute.
                        </p>
                        <a href="/blog/scaling-microservices-for-enterprise" class="text-sm font-medium text-purple-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Scaling Microservices" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </article>
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Industrial Internet Design" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-emerald-400">Designing for the Industrial Internet</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Designing user interfaces for the Industrial Internet of Things (IIoT) demands a unique blend of advanced technology and human-centered design principles. Industrial control systems and dashboards must prioritize safety, efficiency, and reliability above all else, as operators often work in high-stakes environments where split-second decisions can impact production, worker safety, and financial outcomes. UX principles for these complex systems include hierarchical information architecture that presents critical alerts prominently while allowing drill-down into detailed analytics, adaptive interfaces that adjust to user roles and contexts, and fail-safe design patterns that prevent catastrophic errors. Touchscreen interfaces must accommodate gloved hands and varying lighting conditions, while supporting both novice and expert users through progressive disclosure and customizable dashboards. Real-time data visualization requires careful consideration of cognitive load, using techniques like sparklines, heatmaps, and contextual color coding to communicate complex machinery states at a glance. Moreover, industrial interfaces must integrate seamlessly with existing workflows, support multi-device access for remote monitoring, and maintain accessibility standards for diverse user populations. As IIoT systems become more sophisticated, designers must balance technological innovation with proven usability principles to create interfaces that enhance rather than hinder industrial productivity.
                        </p>
                        <a href="/blog/designing-for-the-industrial-internet" class="text-sm font-medium text-emerald-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                </div>
            </article>
            <article class="glass-card rounded-2xl p-8 md:p-12 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 text-red-400">AI-Driven Predictive Maintenance</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            AI-driven predictive maintenance represents a paradigm shift in industrial asset management, harnessing the power of machine learning algorithms to anticipate equipment failures before they manifest. By continuously analyzing sensor data streams from vibration monitors, temperature sensors, acoustic detectors, and other IoT devices, these intelligent systems can identify subtle patterns and anomalies that precede mechanical breakdowns. Advanced machine learning models, including neural networks and time-series analysis algorithms, learn from historical maintenance records and real-time operational data to forecast failure probabilities with remarkable accuracy. This proactive approach enables organizations to transition from costly reactive maintenance schedules to optimized, condition-based interventions that minimize downtime and extend equipment lifespan. Furthermore, predictive maintenance systems can prioritize maintenance tasks based on risk assessment, allocate resources efficiently, and even trigger automated responses like adjusting operational parameters to mitigate imminent failures. As industrial operations become increasingly digitized, AI-driven predictive maintenance will play a crucial role in maximizing operational efficiency, reducing maintenance costs by up to 30%, and ensuring continuous production reliability in the era of Industry 4.0.
                        </p>
                        <a href="/blog/ai-driven-predictive-maintenance" class="text-sm font-medium text-red-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                    </div>
                    <div>
                        <div class="w-full h-64 mb-6 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI-Driven Predictive Maintenance" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Newsletter CTA -->
        <div class="glass-panel p-8 md:p-10 rounded-2xl text-center max-w-3xl mx-auto bg-gradient-to-r from-blue-900/10 to-purple-900/10 border border-white/10 mt-16">
            <h3 class="text-2xl font-bold mb-3">Subscribe to Our Newsletter</h3>
            <p class="text-gray-400 mb-6 text-sm">Get the latest IoT and software insights delivered to your inbox.</p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <input type="email" placeholder="Email address" class="flex-grow px-5 py-3 bg-black/40 border border-white/10 rounded-full text-white text-sm focus:outline-none focus:border-white/30 transition-colors">
                <button type="button" class="px-6 py-3 bg-white text-black text-sm font-bold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)]">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
<!-- <footer class="py-8 border-t border-white/10 z-10 relative bg-black">
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
</html> --> --> -->

