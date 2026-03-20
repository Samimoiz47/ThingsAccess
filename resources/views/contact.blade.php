<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things-access-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things-access-logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - ThingsAccess</title>
    
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
        .glass-form-input {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        .glass-form-input:focus {
            background: rgba(0, 0, 0, 0.6);
            border-color: rgba(255, 255, 255, 0.4);
            outline: none;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
        }
        /* Custom Select Arrow */
        select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
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
            <a href="/portfolio" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a>
          
            <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
            <a href="/contact" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Contact</a>
        </nav>
<!-- 
        <a href="/contact" class="hidden md:block px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] z-20">
            Contact Us
        </a> -->
    </header>

    <!-- Main Content -->
    <main class="pt-32 pb-20 px-6 relative z-10 w-full max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Let's Build the Future</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Ready to transform your enterprise? Our team is standing by to discuss your specific needs.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">
            
            <!-- Contact Form -->
            <div class="glass-panel p-8 md:p-10 rounded-3xl">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" required class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-400 mb-2">Company Name *</label>
                            <input type="text" id="company" name="company" required class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0" placeholder="Acme Inc.">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Work Email *</label>
                            <input type="email" id="email" name="email" required class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0" placeholder="john@acme.com">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-400 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0" placeholder="+1 (555) 000-0000">
                        </div>
                    </div>

                    <div>
                        <label for="interest" class="block text-sm font-medium text-gray-400 mb-2">I'm interested in: *</label>
                        <select id="interest" name="interest" required class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0 cursor-pointer">
                            <option value="" disabled selected>Select a topic</option>
                            <option value="iot">IoT Solutions</option>
                            <option value="software">Enterprise Software</option>
                            <option value="mobile">Mobile Apps</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-400 mb-2">Project Description / Message *</label>
                        <textarea id="message" name="message" rows="4" required class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0 resize-none" placeholder="Tell us about your project goals and constraints..."></textarea>
                    </div>

                     <div>
                        <label for="source" class="block text-sm font-medium text-gray-400 mb-2">How did you hear about us?</label>
                        <input type="text" id="source" name="source" class="glass-form-input w-full px-4 py-3 rounded-xl focus:ring-0" placeholder="e.g. LinkedIn, Referral, Google">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-white text-black font-bold text-lg rounded-xl hover:bg-gray-200 transition-all transform hover:scale-[1.02] shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                            Send Inquiry
                        </button>
                    </div>

                    <div class="text-xs text-center text-gray-500 mt-4">
                        By submitting this form, you agree to our processing of your personal data as described in our <a href="#" class="text-gray-400 underline hover:text-white">Privacy Policy</a>. We respect your privacy and will never sell your information.
                    </div>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div class="flex flex-col gap-8">
                <!-- Contact Details -->
                <div class="glass-panel p-8 rounded-3xl">
                    <h3 class="text-2xl font-bold mb-8">Contact Information</h3>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-blue-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Headquarters</h4>
                                <p class="text-gray-400 leading-relaxed">
                                    ThingsAccess Inc.<br>
                                    60-H , Gulberg III<br>
                                    Lahore, Pakistan
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-purple-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Email Us</h4>
                                <a href="mailto:info@thingsxess.com" class="text-gray-400 hover:text-white transition-colors block">info@thingsxess.com</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-emerald-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Call Us</h4>
                                <p class="text-gray-400">Mon-Fri from 8am to 6pm PST</p>
                                <a href="tel:+923035059200" class="text-white font-medium hover:underline mt-1 block">(+92) 303 505 9200</a>
                                <a href="tel:+14159498161" class="text-white font-medium hover:underline mt-1 block">(+1) 415 949 8161 (for USA)</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Embed Placeholder -->
                <div class="glass-panel p-2 rounded-3xl h-64 overflow-hidden relative group">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.473!2d74.351259!3d31.5125023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s60-H%2C%20Gulberg%20III%2C%20Lahore%2C%20Pakistan!5e0!3m2!1sen!2s!4v1690000000000!5m2!1sen!2s"
                        width="100%"
                        height="100%"
                        style="border:0; filter: grayscale(100%) invert(92%) contrast(83%); opacity: 0.8;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-2xl transition-all duration-500 group-hover:filter-none group-hover:opacity-100">
                    </iframe>
                     <div class="absolute bottom-4 right-4 bg-black/80 px-4 py-2 rounded-lg text-xs font-mono border border-white/20 pointer-events-none">
                        📍 Lahore HQ
                    </div>
                </div>
            </div>
        </div>
    </main>

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




