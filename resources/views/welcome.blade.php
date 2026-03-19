<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Things Access - IoT Solutions & Enterprise Software') }}</title>
    <meta name="description" content="Leading provider of IoT solutions and enterprise software development. Connecting physical assets to the digital world with scalable, secure technologies.">
    <meta name="keywords" content="IoT solutions, enterprise software, digital transformation, software development, IoT frameworks">
    <meta name="author" content="Things Access">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Things Access - IoT Solutions & Enterprise Software">
    <meta property="og:description" content="Leading provider of IoT solutions and enterprise software development. Connecting physical assets to the digital world with scalable, secure technologies.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Things Access - IoT Solutions & Enterprise Software">
    <meta property="twitter:description" content="Leading provider of IoT solutions and enterprise software development. Connecting physical assets to the digital world with scalable, secure technologies.">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Performance & Security -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link rel="preload" href="{{ asset('images/things%20access%20logo.png') }}" as="image" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GSAP for Scroll Float Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        /* Custom Animations */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; animation-delay: 0.3s; }

        body {
            font-family: 'Instrument Sans', sans-serif;
            opacity: 1;
            transition: opacity 0.5s ease;
        }
        body.loaded {
            opacity: 1;
        }
        
        /* Glassmorphism Utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
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

        /* Carousel Styles */
        .carousel-container { overflow: hidden; position: relative; }
        .carousel-track { display: flex; transition: transform 0.5s ease-in-out; }
        .carousel-item { min-width: 100%; padding: 1rem; }

        
        .card {
          --white: hsl(0, 0%, 100%);
          --black: hsl(240, 15%, 9%);
          --paragraph: hsl(0, 0%, 83%);
          --line: hsl(240, 9%, 17%);
          --primary: hsl(266, 92%, 58%);

          position: relative;

          display: flex;
          flex-direction: column;
          gap: 1.5rem;

          padding: 1.5rem;
          width: 100%;
          max-width: 25rem;
          background: rgba(255, 255, 255, 0.0005);
          backdrop-filter: blur(0px);
          -webkit-backdrop-filter: blur(0px);
          border: 1px solid rgba(255, 255, 255, 0.02);
          border-radius: 1rem;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
          transition: all 0.3s ease;
        }

        .card:hover {
          background: rgba(255, 255, 255, 0.08);
          border-color: rgba(255, 255, 255, 0.15);
          transform: translateY(-3px);
          box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Continuous loop animation */
        .product-showcase .grid {
          display: flex;
          overflow: visible;
          width: max-content;
          transition: transform 0.1s linear;
        }

        .project-card {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            width: 400px;
            flex-shrink: 0;
            border-radius: 1rem;
            overflow: hidden;
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

        /* Duplicate the cards for seamless loop */
        .product-showcase .grid::after {
          content: '';
          flex: 1;
          display: flex;
        }

        .product-showcase .grid::after > * {
          flex-shrink: 0;
        }



        .card .card__border {
          overflow: hidden;
          pointer-events: none;

          position: absolute;
          z-index: -10;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);

          width: calc(100% + 2px);
          height: calc(100% + 2px);
          background-image: linear-gradient(
            0deg,
            hsl(0, 0%, 100%) -50%,
            hsl(0, 0%, 40%) 100%
          );

          border-radius: 1rem;
        }

        .card .w-full.h-32.mb-4.rounded-lg.overflow-hidden {
          height: 12rem;
        }



        @keyframes rotate {
          to {
            transform: rotate(360deg);
          }
        }

        .card .card_title__container .card_title {
          font-size: 1.25rem;
          font-weight: bold;
          color: var(--white);
        }

        .card .card_title__container .card_paragraph {
          margin-top: 0.25rem;
          width: 100%;

          font-size: 0.875rem;
          color: var(--paragraph);
          line-height: 1.2;
          overflow: hidden;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
        }

        .card .line {
          width: 100%;
          height: 0.1rem;
          background-color: var(--line);

          border: none;
        }

        .card .card__list {
          display: flex;
          flex-direction: column;
          gap: 0.5rem;
        }

        .card .card__list .card__list_item {
          display: flex;
          align-items: center;
          gap: 0.5rem;
        }

        .card .card__list .card__list_item .check {
          display: flex;
          justify-content: center;
          align-items: center;

          width: 1rem;
          height: 1rem;
          background-color: var(--primary);

          border-radius: 50%;
        }

        .card .card__list .card__list_item .check .check_svg {
          width: 0.75rem;
          height: 0.75rem;

          fill: var(--black);
        }

        .card .card__list .card__list_item .list_text {
          font-size: 0.75rem;
          color: var(--white);
        }

        .card .button {
          cursor: pointer;

          padding: 0.5rem;
          width: 100%;
          background-image: linear-gradient(
            0deg,
            rgba(94, 58, 238, 1) 0%,
            rgba(197, 107, 240, 1) 100%
          );

          font-size: 0.75rem;
          color: var(--white);

          border: 0;
          border-radius: 9999px;
          box-shadow: inset 0 -2px 25px -4px var(--white);
        }

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

        .social-card .logo .logo-svg {
          fill: white;
          width: 30px;
          height: 30px;
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

        /* From Uiverse.io by vinodjangid07 */
        .cookie-card {
          width: 300px;
          height: 220px;
          background-color: rgb(255, 255, 255);
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          padding: 20px 30px;
          gap: 13px;
          position: fixed;
          bottom: 20px;
          right: 20px;
          transform: translateY(calc(100% + 20px));
          overflow: hidden;
          box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.062);
          border-radius: 10px;
          z-index: 1000;
          transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
          opacity: 0;
        }

        .cookie-card.show {
          transform: translateY(0);
          opacity: 1;
        }

        .cookie-card #cookieSvg {
          width: 50px;
        }

        .cookie-card #cookieSvg g path {
          fill: rgb(97, 81, 81);
        }

        .cookie-card .cookieHeading {
          font-size: 1.2em;
          font-weight: 800;
          color: rgb(26, 26, 26);
        }

        .cookie-card .cookieDescription {
          text-align: center;
          font-size: 0.7em;
          font-weight: 600;
          color: rgb(99, 99, 99);
        }

        .cookie-card .buttonContainer {
          display: flex;
          gap: 20px;
          flex-direction: row;
        }

        .cookie-card .acceptButton {
          width: 80px;
          height: 30px;
          background-color: #7b57ff;
          transition-duration: .2s;
          border: none;
          color: rgb(241, 241, 241);
          cursor: pointer;
          font-weight: 600;
          border-radius: 20px;
        }

        .cookie-card .declineButton {
          width: 80px;
          height: 30px;
          background-color: rgb(218, 218, 218);
          transition-duration: .2s;
          color: rgb(46, 46, 46);
          border: none;
          cursor: pointer;
          font-weight: 600;
          border-radius: 20px;
        }

        .cookie-card .declineButton:hover {
          background-color: #ebebeb;
          transition-duration: .2s;
        }

        .cookie-card .acceptButton:hover {
          background-color: #9173ff;
          transition-duration: .2s;
        }

        /* Tagline Reveal Animation */
        .word {
          opacity: 0;
          transform: translateY(15px);
          display: inline-block;
          animation: revealWord 0.8s ease forwards;
        }

        .word-space {
          display: inline-block;
          width: 0.3em;
        }

        @keyframes revealWord {
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        /* Mobile Menu Styles */
        #mobile-menu {
          opacity: 0;
          transition: opacity 0.3s ease;
        }
        #mobile-menu.opacity-100 {
          opacity: 1;
        }

        /* Scroll Float Animation Styles */
        .scroll-float {
          overflow: hidden;
        }

        .scroll-float-text {
          display: inline-block;
          font-size: 2.25rem;
          font-weight: 900;
          text-align: center;
          line-height: 1.5;
        }

        @media (min-width: 768px) {
          .scroll-float-text {
            font-size: 3rem;
          }
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
          .hero-section h1 {
            font-size: 2.5rem;
            line-height: 1.2;
          }

          .hero-section .tagline {
            font-size: 1rem;
            line-height: 1.4;
          }

          .hero-section .flex.flex-col.sm\\:flex-row {
            flex-direction: column;
            gap: 1rem;
          }

          .hero-section .min-w-\\[180px\\] {
            min-width: 100%;
            text-align: center;
          }

          .product-showcase .grid {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            gap: 1rem;
            padding: 1rem;
          }

          .product-showcase .grid > div {
            flex-shrink: 0;
            width: 280px;
            scroll-snap-align: start;
          }

          .product-showcase .grid::after {
            display: none;
          }

          .insights-showcase.grid.grid-cols-1.md\\:grid-cols-1.lg\\:grid-cols-1 {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            gap: 1rem;
            padding: 1rem;
          }

          .insights-showcase.grid.grid-cols-1.md\\:grid-cols-1.lg\\:grid-cols-1 > div {
            flex-shrink: 0;
            width: 280px;
            scroll-snap-align: start;
          }

          .insights-showcase.grid.grid-cols-1.md\\:grid-cols-1.lg\\:grid-cols-1::after {
            display: none;
          }

          .partner-carousel-container .partner-carousel {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.75rem;
            padding: 0.75rem;
            transform: none !important;
          }

          .partner-slide {
            width: 100% !important;
            padding: 0.5rem !important;
          }

          .partner-slide img {
            height: 3.5rem !important;
            opacity: 0.85;
          }

          /* Hide duplicated slides on mobile */
          .partner-carousel .partner-slide:nth-child(n+5) {
            display: none;
          }

          .testimonials-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
          }

          .social-card {
            width: 100px;
            height: 100px;
          }

          .social-card .logo {
            font-size: 0.6em;
            letter-spacing: 2px;
          }

          .social-card .logo-svg {
            width: 25px;
            height: 25px;
          }

          .social-card .icon .svg {
            width: 15px;
            height: 15px;
          }

          .cookie-card {
            width: 280px;
            height: 200px;
            padding: 15px 25px;
            gap: 10px;
          }

          .cookie-card .cookieHeading {
            font-size: 1.1em;
          }

          .cookie-card .cookieDescription {
            font-size: 0.65em;
          }

          .cookie-card .acceptButton,
          .cookie-card .declineButton {
            width: 70px;
            height: 28px;
            font-size: 0.65em;
          }

          /* Hide navigation buttons on mobile for horizontal scroll */
          .product-showcase button,
          .insights-showcase button,
          .partner-carousel-container button {
            display: none;
          }
        }

        /* Tablet Responsiveness */
        @media (min-width: 769px) and (max-width: 1024px) {
          .hero-section h1 {
            font-size: 4rem;
          }

          .hero-section .tagline {
            font-size: 1.5rem;
          }

          .product-showcase .grid > div {
            flex-shrink: 0;
            width: 280px;
          }

          .insights-showcase.grid.grid-cols-1.md\\:grid-cols-1.lg\\:grid-cols-1 > div {
            flex-shrink: 0;
            width: 280px;
          }

          .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
          }

          .partner-slide {
            width: 150px;
          }
        }

        .char {
          display: inline-block;
        }
    </style>
</head>
<body class="antialiased text-white overflow-x-hidden bg-black selection:bg-purple-500 selection:text-white">

    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-purple-600 text-white px-4 py-2 rounded z-50">
        Skip to main content
    </a>

    <!-- Background Theme -->
    <div class="fixed inset-0 w-full h-full overflow-hidden z-0 bg-black pointer-events-none" aria-hidden="true">
        <video autoplay muted loop playsinline class="min-w-full min-h-full w-full h-full object-cover opacity-100" preload="metadata">
            <source src="/videos/earth_1.mp4" type="video/mp4">
            <track kind="captions" src="" label="No captions available">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-black/10 to-black/35 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/8"></div>
    </div>

    @include('partials.navbar')

    <!-- Hero Section -->
    <main id="main-content" class="relative h-screen flex flex-col items-center justify-start text-center px-4 pt-32 md:pt-40" role="main">
        <div class="animate-fade-in-up w-full max-w-5xl mx-auto z-10">
            <h1 class="text-4xl md:text-7xl font-bold tracking-tighter leading-tight text-white drop-shadow-2xl mb-6">
                Things Access
            </h1>
            <div class="tagline text-lg md:text-2xl text-gray-300 font-light max-w-2xl mx-auto mb-10 leading-relaxed" aria-live="polite" id="tagline"></div>

            <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                 <a href="/portfolio" class="px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/20 text-white font-medium rounded-full hover:bg-white/10 hover:border-white/40 transition-all flex items-center justify-center gap-2 group min-w-[180px]" aria-label="View our portfolio of projects">
                    View Our Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                 </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 animate-bounce">
            <a href="#services" aria-label="Scroll down to our services section">
                <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </main>

    {{-- Solutions Snapshot --}}
    {{-- <section id="services" class="py-20 px-6 max-w-7xl mx-auto relative z-10" aria-labelledby="services-heading">
        <header class="text-center mb-16">
            <h2 class="scroll-float" id="services-heading">
                <span class="scroll-float-text" id="expertise-text">Our Solutions</span>
            </h2>
            <div class="w-20 h-1 bg-blue-500 mx-auto rounded-full" aria-hidden="true"></div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" role="list">
            <!-- Smart Home Automation -->
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://thingsaccess.com/assets/images/service/smartHome.jpg" alt="Smart Home Automation" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Smart Home Automation</h3>
                <p class="text-gray-400 mb-6">Our Smart Home System provides energy efficiency, safety, reliability, convenience and remote access to all household electrical and electronic devices.</p>
                <a href="/expertise" class="text-sm font-medium text-blue-300 group-hover:text-white flex items-center gap-1" aria-label="Learn more about our smart home automation solutions">Read More <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>

            <!-- Solar Monitoring -->
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://thingsaccess.com/assets/images/service/solar.jpg" alt="Solar Monitoring" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Solar Monitoring</h3>
                <p class="text-gray-400 mb-6">Our solar monitoring system provides the automatic tuning and configurations of hybrid inverters operational parameters, load management and scheduling.</p>
                <a href="/expertise" class="text-sm font-medium text-purple-300 group-hover:text-white flex items-center gap-1" aria-label="Learn more about our solar monitoring solutions">Read More <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>

            <!-- Agriculture Farming -->
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://thingsaccess.com/assets/images/service/agri-img.png" alt="Agriculture Farming" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Agriculture Farming</h3>
                <p class="text-gray-400 mb-6">Our smart agriculture farming system comprises custom sensor modules that monitor soil moisture, acidity level, temperature, and other environment.</p>
                <a href="/expertise" class="text-sm font-medium text-emerald-300 group-hover:text-white flex items-center gap-1" aria-label="Learn more about our agriculture farming solutions">Read More <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>

            <!-- Security Solutions -->
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://thingsaccess.com/assets/images/service/IoT security solutions.jpg" alt="Security Solutions" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Security Solutions</h3>
                <p class="text-gray-400 mb-6">Our Smart Security provides the automatic tuning and configurations of hybrid inverters operational parameters, load management and scheduling.</p>
                <a href="/expertise" class="text-sm font-medium text-red-300 group-hover:text-white flex items-center gap-1" aria-label="Learn more about our security solutions">Read More <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
        </div>
    </section> --}}

    <!-- Our Expertise -->
    <section id="expertise" class="product-showcase py-20 px-6 max-w-7xl mx-auto z-10 relative">
        <header class="text-center mb-16">
            <h2 class="scroll-float">
                <span class="scroll-float-text" id="expertise-text">Our Expertise</span>
            </h2>
            <div class="w-20 h-1 bg-blue-500 mx-auto rounded-full" aria-hidden="true"></div>
        </header>

        <p class="text-center text-gray-300 mb-12">Explore our showcase of innovative IoT, enterprise software, and mobile solutions that drive real business transformation.</p>

        <div class="relative overflow-hidden pt-4 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-8" style="display: flex; width: max-content;" id="expertise-carousel">
                <!-- Project Card 1 -->
                <div class="project-card group cursor-pointer" data-category="iot">
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
                        <h3 class="text-2xl font-bold mb-2">Smart rainwater harvesting & water quality monitoring system</h3>
                        <p class="text-gray-400 text-sm mb-4">Developed a complete IoT solution for monitoring and managing rainwater harvesting systems. Built Web and Mobile apps for real-time sensor data transmits via MQTT and LoRaWAN.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="project-card group cursor-pointer" data-category="iot">
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
                        <h3 class="text-2xl font-bold mb-2">Smart Home Automation System</h3>
                        <p class="text-gray-400 text-sm mb-4">Complete smart home system including hardware and firmware for smart switches, central hub for local/remote control, Alexa integration and energy monitoring.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="project-card group cursor-pointer" data-category="mobile">
                    <div class="relative h-64 bg-gradient-to-br from-emerald-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 3 Portfolio.png') }}" alt="Smart Trucking & Logistics Mobile Application" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/smart-trucking-logistics-mobile-application" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-emerald-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Trucking & Logistics System</h3>
                        <p class="text-gray-400 text-sm mb-4">Connecting shippers, drivers, and trucking companies. Features load posting, bidding, real-time tracking, secure payments, and delivery confirmation.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 4 -->
                <div class="project-card group cursor-pointer" data-category="mobile">
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
                        <p class="text-gray-400 text-sm mb-4">High-performance monitoring with live dashboard, system status, alerts. Supports MQTT for live updates, remote firmware updates, and secure data transfer.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 5 -->
                <div class="project-card group cursor-pointer" data-category="mobile">
                    <div class="relative h-64 bg-gradient-to-br from-purple-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/nfc.png') }}" alt="NFC Industrial Tracking App" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/nfc-industrial-tracking-app-production-monitoring" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-purple-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">NFC Industrial Tracking System</h3>
                        <p class="text-gray-400 text-sm mb-4">Real-time monitoring of machines, operators, and production bundles using NFC. Features driver check-in/out, bundle tracking, and instant manager alerts.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 6 -->
                <div class="project-card group cursor-pointer" data-category="iot">
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
                        <h3 class="text-2xl font-bold mb-2">Sentex Machine & Spindle Monitoring</h3>
                        <p class="text-gray-400 text-sm mb-4">Tracking electrical load, RPM, temperature, spindle status, and historical performance. delivered via MQTT and REST APIs with operator/manager dashboards.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 7 -->
                <div class="project-card group cursor-pointer" data-category="mobile">
                    <div class="relative h-64 bg-gradient-to-br from-teal-900/40 to-black overflow-hidden">
                    <img src="{{ asset('images/Sec 7.1 Portfolio.png') }}" alt="Smart Pump & Turbine Management" class="w-full h-full object-cover">
                        <div class="overlay absolute inset-0 bg-black/80 flex items-center justify-center">
                            <a href="/portfolio/smart-pump-turbine-management-mobile-app-solution" class="px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors">View Case Study</a>
                        </div>
                        <!-- <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-teal-500/80 text-xs font-bold rounded-full">Mobile App</span>
                        </div> -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Smart Pump & Turbine Management</h3>
                        <p class="text-gray-400 text-sm mb-4">Real-time monitoring, control, and scheduling of multiple devices. Integrated MQTT for live updates and RESTful APIs for efficient data management.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-teal-500/20 text-teal-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 8 -->
                <div class="project-card group cursor-pointer" data-category="mobile">
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
                        <h3 class="text-2xl font-bold mb-2">IoT-Based Energy Monitoring System</h3>
                        <p class="text-gray-400 text-sm mb-4">Energy monitoring across buildings and floors. Real-time stats, interactive dashboards for analytics, helping track consumption and optimize energy usage.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Project Card 9 -->
                <div class="project-card group cursor-pointer" data-category="iot">
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
                        <p class="text-gray-400 text-sm mb-4">Field sensors monitoring soil moisture and environment. Automatic solenoid valve management based on sensor reports to enhance crop production.</p>
                        <div class="flex flex-wrap gap-2">
                            <!-- <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-full"></span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Trust Indicators -->
    <section class="py-12 border-y border-white/5 bg-white/5 backdrop-blur-sm z-10 relative">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-sm font-mono uppercase text-white/40 mb-8">Trusted by Industry Leaders</p>
            <div class="partner-carousel-container relative overflow-hidden">
                <div class="partner-carousel flex transition-transform duration-500 ease-in-out" id="partner-carousel">
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo1.png" alt="Partner Logo 1" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo2.png" alt="Partner Logo 2" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo3.png" alt="Partner Logo 3" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo4.png" alt="Partner Logo 4" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo1.png" alt="Partner Logo 1" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo2.png" alt="Partner Logo 2" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo3.png" alt="Partner Logo 3" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="partner-slide flex-shrink-0 w-full md:w-1/4 px-4">
                        <img src="https://thingsaccess.com/assets/images/pt-logo4.png" alt="Partner Logo 4" class="w-full h-32 object-contain mx-auto opacity-60 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-black/70 transition-colors z-10" onclick="prevPartnerSlide()">&larr;</button>
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full hover:bg-black/70 transition-colors z-10" onclick="nextPartnerSlide()">&rarr;</button>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <!-- <section class="py-24 px-6 max-w-4xl mx-auto text-center z-10 relative">
        <div class="carousel-container relative">
            <div class="carousel-track" id="testimonialTrack">
                <div class="carousel-item">
                    <div class="text-4xl text-blue-400 mb-6">"</div>
                    <p class="text-xl md:text-3xl font-light italic leading-relaxed mb-8">
                       // <span class="scroll-float-text" id="testimonial-text">ThingsAccess transformed  our          logistics operations. The real-time data visibility has increased our         efficiency by 40%  in  just three          months.</span>
                    </p>
                    <div> -->
              /

    <!-- Blog Preview -->
    <!-- <section id="insights" class="product-showcase py-20 px-6 max-w-7xl mx-auto z-10 relative">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="scroll-float">
                    <span class="scroll-float-text" id="insights-text">Latest Insights</span>
                </h2>
                <p class="text-gray-400">Trends and analysis from our engineering team</p>
            </div>
            <a href="/blog" class="hidden md:inline-flex items-center text-gray-300 hover:text-white transition-colors">View All Articles <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>

        <div class="relative" style="overflow: hidden;">
            <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full z-10 hover:bg-black/70 transition-colors" onclick="scrollLeft1()">&larr;</button>
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full z-10 hover:bg-black/70 transition-colors" onclick="scrollRight1()">&rarr;</button>
        <div class="insights-showcase grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-12 mb-16" style="display: flex; width: calc(200% + 3rem);" role="list">
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline w-full max-w-sm" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Edge Computing in Manufacturing" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">The Future of Edge Computing in Manufacturing</h3>
                <p class="text-gray-400 mb-6">How processing data closer to the source is revolutionizing the factory floor. Edge computing enables real-time analytics, reduces latency, and improves operational efficiency in manufacturing environments.</p>
                <a href="/blog/the-future-of-edge-computing-in-manufacturing" class="text-sm font-medium text-blue-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Scaling Microservices" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Scaling Microservices for Enterprise</h3>
                <p class="text-gray-400 mb-6">Best practices for maintaining reliability while scaling your service architecture. Microservices offer flexibility and scalability, but require careful design to ensure system stability.</p>
                <a href="/blog/scaling-microservices-for-enterprise" class="text-sm font-medium text-purple-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Industrial Internet Design" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Designing for the Industrial Internet</h3>
                <p class="text-gray-400 mb-6">UX principles for complex industrial control systems and dashboards. Industrial interfaces require special attention to usability, safety, and efficiency.</p>
                <a href="/blog/designing-for-the-industrial-internet" class="text-sm font-medium text-emerald-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI-Driven Predictive Maintenance" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">AI-Driven Predictive Maintenance</h3>
                <p class="text-gray-400 mb-6">Leveraging machine learning to predict equipment failures before they occur. AI-driven predictive maintenance uses sensor data and historical patterns to forecast maintenance needs.</p>
                <a href="/blog/ai-driven-predictive-maintenance" class="text-sm font-medium text-red-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Edge Computing in Manufacturing" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">The Future of Edge Computing in Manufacturing</h3>
                <p class="text-gray-400 mb-6">How processing data closer to the source is revolutionizing the factory floor. Edge computing enables real-time analytics, reduces latency, and improves operational efficiency in manufacturing environments.</p>
                <a href="/blog/the-future-of-edge-computing-in-manufacturing" class="text-sm font-medium text-blue-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Scaling Microservices" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Scaling Microservices for Enterprise</h3>
                <p class="text-gray-400 mb-6">Best practices for maintaining reliability while scaling your service architecture. Microservices offer flexibility and scalability, but require careful design to ensure system stability.</p>
                <a href="/blog/scaling-microservices-for-enterprise" class="text-sm font-medium text-purple-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Industrial Internet Design" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">Designing for the Industrial Internet</h3>
                <p class="text-gray-400 mb-6">UX principles for complex industrial control systems and dashboards. Industrial interfaces require special attention to usability, safety, and efficiency.</p>
                <a href="/blog/designing-for-the-industrial-internet" class="text-sm font-medium text-emerald-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
            <article class="glass-card rounded-2xl p-8 flex flex-col items-start group hover:no-underline" style="width: 300px;" role="listitem">
                <div class="w-full h-32 mb-6 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI-Driven Predictive Maintenance" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mb-3">AI-Driven Predictive Maintenance</h3>
                <p class="text-gray-400 mb-6">Leveraging machine learning to predict equipment failures before they occur. AI-driven predictive maintenance uses sensor data and historical patterns to forecast maintenance needs.</p>
                <a href="/blog/ai-driven-predictive-maintenance" class="text-sm font-medium text-red-300 group-hover:text-white flex items-center gap-1">Read Article <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
            </article>
        </div>

        <!-- Newsletter CTA -->
        <div class="glass-panel p-8 md:p-10 rounded-2xl text-center max-w-3xl mx-auto bg-gradient-to-r from-blue-900/10 to-purple-900/10 border border-white/10">
            <h3 class="text-2xl font-bold mb-3">Subscribe to Our Newsletter</h3>
            <p class="text-gray-400 mb-6 text-sm">Get the latest IoT and software insights delivered to your inbox.</p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <input type="email" placeholder="Email address" class="flex-grow px-5 py-3 bg-black/40 border border-white/10 rounded-full text-white text-sm focus:outline-none focus:border-white/30 transition-colors">
                <button type="button" class="px-6 py-3 bg-white text-black text-sm font-bold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)]">Subscribe</button>
            </form>
        </div>
    <!-- </section> --> -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 px-6 relative z-10 bg-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="scroll-float">
                    <span class="scroll-float-text" id="testimonials-text">What Our Clients Say</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">Real results from enterprises we've helped transform</p>
            </div>

            <!-- Filter Tabs -->
            <div class="flex flex-wrap gap-2 justify-center mb-12">
                <button class="testimonial-filter-btn active px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="all">
                    All
                </button>
                <button class="testimonial-filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="iot">
                    IoT
                </button>
                <button class="testimonial-filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="enterprise">
                    Enterprise
                </button>
                <button class="testimonial-filter-btn px-5 py-2 text-sm font-medium rounded-full border border-white/10 hover:bg-white/10 transition-all" data-filter="mobile">
                    Mobile
                </button>
            </div>

            <!-- Testimonials Grid -->
            <div id="testimonialsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Testimonial 1 - IoT -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="iot">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">JR</span>
                        </div>
                        <div>
                            <h4 class="font-bold">James Rodriguez</h4>
                            <p class="text-blue-300 text-xs">CTO, Metro City Utilities</p>
                        </div>
                    </div>
                    <div class="text-3xl text-blue-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        ThingsAccess transformed our grid operations. Outage times down 67%, saving millions annually. The predictive capabilities are game-changing.
                    </p>
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-bold rounded-full">IoT Solution</span>
                </div>

                <!-- Testimonial 2 - Enterprise -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="enterprise">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">MC</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-purple-300 text-xs">VP Engineering, ShopStream</p>
                        </div>
                    </div>
                    <div class="text-3xl text-purple-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        Robust, scalable architecture that handled Black Friday traffic flawlessly. World-class engineering and attention to detail.
                    </p>
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-bold rounded-full">Enterprise Software</span>
                </div>

                <!-- Testimonial 3 - Mobile -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="mobile">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">SJ</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Sarah Jenkins</h4>
                            <p class="text-emerald-300 text-xs">CEO, SecurePay Financial</p>
                        </div>
                    </div>
                    <div class="text-3xl text-emerald-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        The mobile app is a masterpiece. Seamless biometric auth, intuitive UX. 45% increase in daily active users since launch.
                    </p>
                    <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-full">Mobile App</span>
                </div>

                <!-- Testimonial 4 - IoT -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="iot">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">LP</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Linda Park</h4>
                            <p class="text-blue-300 text-xs">Director, SmartHome Inc</p>
                        </div>
                    </div>
                    <div class="text-3xl text-blue-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        Unified IoT platform integrating dozens of devices. Elegant, reliable, 98% customer satisfaction. Real-time sync is flawless.
                    </p>
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-bold rounded-full">IoT Solution</span>
                </div>

                <!-- Testimonial 5 - Enterprise -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="enterprise">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">DW</span>
                        </div>
                        <div>
                            <h4 class="font-bold">David Williams</h4>
                            <p class="text-purple-300 text-xs">CIO, Global Logistics</p>
                        </div>
                    </div>
                    <div class="text-3xl text-purple-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        Project management platform revolutionized our distributed teams. Real-time visibility across 15 countries. ROI in 4 months.
                    </p>
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-bold rounded-full">Enterprise Software</span>
                </div>

                <!-- Testimonial 6 - Mobile -->
                <div class="testimonial-item glass-card rounded-2xl p-6" data-category="mobile">
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center flex-shrink-0">
                            <span class="text-lg font-bold">AN</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Dr. Amanda Norton</h4>
                            <p class="text-emerald-300 text-xs">CMO, HealthConnect</p>
                        </div>
                    </div>
                    <div class="text-3xl text-emerald-400 mb-3">"</div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        HIPAA-compliant, user-friendly, rock-solid. 50,000+ consultations without a single security incident. Exceptional quality.
                    </p>
                    <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-full">Mobile App</span>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="/testimonials" class="inline-flex items-center text-gray-300 hover:text-white transition-colors">
                    View All Testimonials 
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="contact" class="py-24 px-6 text-center z-10 relative bg-gradient-to-t from-blue-900/20 to-transparent">
        <div class="max-w-3xl mx-auto">
            <h2 class="scroll-float">
                <span class="scroll-float-text" id="contact-text">Ready to Transform Your Business?</span>
            </h2>
            <p class="text-xl text-gray-300 mb-10">Let's discuss how ThingsAccess can build the future of your operations.</p>
            <a href="/contact" class="inline-block px-10 py-5 bg-white text-black font-bold text-lg rounded-full hover:bg-gray-200 transition-all transform hover:scale-105 shadow-[0_0_25px_rgba(255,255,255,0.3)]">
                Contact Us
            </a>
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
    </footer>

    <!-- Loading Script -->
    <script>
        // Function to check if all images are loaded
        function imagesLoaded() {
            const images = document.querySelectorAll('img');
            const promises = Array.from(images).map(img => {
                return new Promise((resolve, reject) => {
                    if (img.complete) {
                        resolve();
                    } else {
                        img.addEventListener('load', resolve);
                        img.addEventListener('error', resolve); // Resolve on error too to not block loading
                    }
                });
            });
            return Promise.all(promises);
        }

        // Function to check if video is loaded
        function videoLoaded() {
            const video = document.querySelector('video');
            if (!video) return Promise.resolve();
            return new Promise((resolve) => {
                if (video.readyState >= 3) { // HAVE_FUTURE_DATA or higher
                    resolve();
                } else {
                    video.addEventListener('canplay', resolve);
                    video.addEventListener('error', resolve);
                }
            });
        }

        // Wait for all components to load
        Promise.all([
            imagesLoaded(),
            videoLoaded(),
            new Promise(resolve => {
                if (document.readyState === 'complete') {
                    resolve();
                } else {
                    window.addEventListener('load', resolve);
                }
            })
        ]).then(() => {
            // Add a small delay to ensure smooth transition
            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 100);
        });
    </script>

    <!-- Particle Animation Script -->
    <script>
        const canvas = document.createElement('canvas');
        canvas.id = 'particle-canvas';
        canvas.style.position = 'fixed';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.style.pointerEvents = 'none';
        // Background layer
        canvas.style.zIndex = '-40';
        document.body.appendChild(canvas);

        const ctx = canvas.getContext('2d');
        let width, height;
        let particles = [];
        let signals = [];

        // Configuration
        const particleCount = 20; 
        const connectionDistance = 150; 
        const flowSpeed = 1.2;

        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        }

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = flowSpeed + Math.random() * 0.5;
                this.vy = (Math.random() - 0.5) * 0.5; 
                this.size = 3; 
                this.hue = 200 + Math.random() * 40; 
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x > width + 50) {
                    this.x = -50;
                    this.y = Math.random() * height;
                }
                
                if (this.y < -50) this.y = height + 50;
                if (this.y > height + 50) this.y = -50;
            }

            draw() {
                ctx.shadowBlur = 10;
                ctx.shadowColor = `hsl(${this.hue}, 100%, 70%)`;
                ctx.fillStyle = `hsl(${this.hue}, 100%, 70%)`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
                
                ctx.shadowBlur = 0;
                ctx.fillStyle = '#fff';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size * 0.5, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        class Signal {
            constructor(p1, p2) {
                this.p1 = p1;
                this.p2 = p2;
                this.progress = 0;
                this.speed = 0.03 + Math.random() * 0.02;
                this.active = true;
            }

            update() {
                this.progress += this.speed;
                if (this.progress >= 1) this.active = false;
            }

            draw() {
                const cx = this.p1.x + (this.p2.x - this.p1.x) * this.progress;
                const cy = this.p1.y + (this.p2.y - this.p1.y) * this.progress;

                ctx.shadowBlur = 8;
                ctx.shadowColor = '#fff';
                ctx.fillStyle = '#fff';
                ctx.beginPath();
                ctx.arc(cx, cy, 2, 0, Math.PI * 2);
                ctx.fill();
                ctx.shadowBlur = 0;
            }
        }

        function init() {
            resize();
            particles = [];
            signals = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, width, height);

            for (let i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();

                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < connectionDistance) {
                        const opacity = 1 - (dist / connectionDistance);
                        ctx.strokeStyle = `rgba(100, 200, 255, ${opacity * 0.3})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();

                        if (Math.random() < 0.003) { 
                             if (Math.random() > 0.5) signals.push(new Signal(particles[i], particles[j]));
                             else signals.push(new Signal(particles[j], particles[i]));
                        }
                    }
                }
            }

            for (let i = signals.length - 1; i >= 0; i--) {
                const s = signals[i];
                if (s.active) {
                    s.update();
                    s.draw();
                } else {
                    signals.splice(i, 1);
                }
            }
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', init);
        init();
        animate();

        // Simple Testimonial Carousel Script
        let currentTestimonial = 0;
        const items = document.querySelectorAll('.carousel-item');
        const dots = document.querySelectorAll('button[onclick^="showTestimonial"]');

        function showTestimonial(index) {
            items[currentTestimonial].classList.add('hidden');
            dots[currentTestimonial].style.opacity = '0.3';
            
            currentTestimonial = index;
            
            items[currentTestimonial].classList.remove('hidden');
            dots[currentTestimonial].style.opacity = '1';
        }

        // Testimonial Filter Functionality
        const testimonialFilterBtns = document.querySelectorAll('.testimonial-filter-btn');
        const testimonialItems = document.querySelectorAll('.testimonial-item');

        testimonialFilterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                testimonialFilterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                // Filter testimonials
                testimonialItems.forEach(item => {
                    const category = item.dataset.category;
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Expertise Section Infinite Loop
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('expertise-carousel');
            if (carousel) {
                // Clone cards for seamless loop
                const cards = Array.from(carousel.children);
                cards.forEach(card => {
                    const clone = card.cloneNode(true);
                    carousel.appendChild(clone);
                });

                let xPos = 0;
                const speed = 0.4; // Pixels per frame
                const totalWidth = (400 + 32) * cards.length; // (card width + gap) * number of original cards

                function move() {
                    xPos -= speed;
                    if (Math.abs(xPos) >= totalWidth) {
                        xPos = 0;
                    }
                    carousel.style.transform = `translateX(${xPos}px)`;
                    requestAnimationFrame(move);
                }
                
                // Pause on hover
                let animationId = requestAnimationFrame(move);
                carousel.addEventListener('mouseenter', () => cancelAnimationFrame(animationId));
                carousel.addEventListener('mouseleave', () => animationId = requestAnimationFrame(move));
            }
        });
        
        // Letter-to-Letter Animation for Tagline
        document.addEventListener('DOMContentLoaded', function() {
            const taglineElement = document.getElementById('tagline');
            if (taglineElement) {
            const text = "Seamlessly connecting your physical assets to the digital world. We provide end-to-end IoT frameworks and be spoke software that scale with your ambition.";
                let charIndex = 0;

                function typeWriter() {
                    if (charIndex < text.length) {
                        const char = text.charAt(charIndex);
                        const span = document.createElement('span');
                        span.textContent = char;
                        span.style.color = '#ffffff'; // White color
                        span.style.animation = 'fadeIn 0.5s ease-in-out';
                        taglineElement.appendChild(span);

                        charIndex++;
                        setTimeout(typeWriter, 50); // Adjust speed for letter-by-letter
                    }
                }

                typeWriter();
            }

            // Mobile Menu Toggle
            const mobileMenuBtn = document.querySelector('button[aria-controls="mobile-menu"]');
            const mobileMenu = document.createElement('div');
            mobileMenu.id = 'mobile-menu';
            mobileMenu.className = 'fixed inset-0 z-40 bg-black/95 backdrop-blur-md md:hidden';
            mobileMenu.innerHTML = `
                <div class="flex flex-col items-center justify-center h-full space-y-8">
                    <a href="/" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Home</a>
                    <a href="/portfolio" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Portfolio</a>
                    <a href="#services" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Solutions</a>
                    <a href="/about" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">About</a>
                    <a href="/blog" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Blog</a>
                    <a href="/contact" class="px-8 py-4 bg-white text-black text-lg font-semibold rounded-full hover:bg-gray-200 transition-colors mt-8">
                        Contact Us
                    </a>
                </div>
            `;
            mobileMenu.style.display = 'none';
            document.body.appendChild(mobileMenu);

            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);

                if (!isExpanded) {
                    mobileMenu.style.display = 'block';
                    setTimeout(() => mobileMenu.classList.add('opacity-100'), 10);
                } else {
                    mobileMenu.classList.remove('opacity-100');
                    setTimeout(() => mobileMenu.style.display = 'none', 300);
                }
            });

            // Close mobile menu when clicking on links
            mobileMenu.addEventListener('click', function(e) {
                if (e.target.tagName === 'A') {
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    mobileMenu.classList.remove('opacity-100');
                    setTimeout(() => mobileMenu.style.display = 'none', 300);
                }
            });

            // Cookie Popup - Show only on page refresh
            console.log('Checking cookie popup...');
            if (performance.navigation.type === 1) { // 1 means reload
                console.log('Page refreshed, showing cookie popup...');
                const popup = document.getElementById('cookiePopup');
                if (popup) {
                    console.log('Popup found, displaying...');
                    popup.style.display = 'flex';
                    setTimeout(() => popup.classList.add('show'), 10);

                    document.getElementById('acceptCookies').addEventListener('click', function() {
                        popup.classList.remove('show');
                        setTimeout(() => popup.style.display = 'none', 500);
                    });

                    document.getElementById('declineCookies').addEventListener('click', function() {
                        popup.classList.remove('show');
                        setTimeout(() => popup.style.display = 'none', 500);
                    });
                } else {
                    console.log('Popup not found!');
                }
            } else {
                console.log('Not a refresh, skipping cookie popup...');
            }

            // Scroll Float Animation
            gsap.registerPlugin(ScrollTrigger);

            // Function to split text into characters
            function splitTextIntoChars(text) {
                return text.split('').map(char => {
                    const span = document.createElement('span');
                    span.className = 'char';
                    span.textContent = char === ' ' ? '\u00A0' : char;
                    return span;
                });
            }

            // Apply animation to "Our Expertise" section
            const expertiseText = document.getElementById('expertise-text');
            if (expertiseText) {
                const chars = splitTextIntoChars(expertiseText.textContent);
                expertiseText.innerHTML = '';
                chars.forEach(char => expertiseText.appendChild(char));

                gsap.fromTo(
                    chars,
                    {
                        willChange: 'opacity, transform',
                        opacity: 0,
                        yPercent: 120,
                        scaleY: 2.3,
                        scaleX: 0.7,
                        transformOrigin: '50% 0%'
                    },
                    {
                        duration: 1,
                        ease: 'back.inOut(2)',
                        opacity: 1,
                        yPercent: 0,
                        scaleY: 1,
                        scaleX: 1,
                        stagger: 0.03,
                        scrollTrigger: {
                            trigger: expertiseText,
                            start: 'center bottom+=50%',
                            end: 'bottom bottom-=40%',
                            scrub: true
                        }
                    }
                );
            }

            // Apply animation to "Featured Work" section
            const featuredText = document.getElementById('featured-text');
            if (featuredText) {
                const chars = splitTextIntoChars(featuredText.textContent);
                featuredText.innerHTML = '';
                chars.forEach(char => featuredText.appendChild(char));

                gsap.fromTo(
                    chars,
                    {
                        willChange: 'opacity, transform',
                        opacity: 0,
                        yPercent: 120,
                        scaleY: 2.3,
                        scaleX: 0.7,
                        transformOrigin: '50% 0%'
                    },
                    {
                        duration: 1,
                        ease: 'back.inOut(2)',
                        opacity: 1,
                        yPercent: 0,
                        scaleY: 1,
                        scaleX: 1,
                        stagger: 0.03,
                        scrollTrigger: {
                            trigger: featuredText,
                            start: 'center bottom+=50%',
                            end: 'bottom bottom-=40%',
                            scrub: true
                        }
                    }
                );
            }

            // Apply animation to "Latest Insights" section
            const insightsText = document.getElementById('insights-text');
            if (insightsText) {
                const chars = splitTextIntoChars(insightsText.textContent);
                insightsText.innerHTML = '';
                chars.forEach(char => insightsText.appendChild(char));

                gsap.fromTo(
                    chars,
                    {
                        willChange: 'opacity, transform',
                        opacity: 0,
                        yPercent: 120,
                        scaleY: 2.3,
                        scaleX: 0.7,
                        transformOrigin: '50% 0%'
                    },
                    {
                        duration: 1,
                        ease: 'back.inOut(2)',
                        opacity: 1,
                        yPercent: 0,
                        scaleY: 1,
                        scaleX: 1,
                        stagger: 0.03,
                        scrollTrigger: {
                            trigger: insightsText,
                            start: 'center bottom+=50%',
                            end: 'bottom bottom-=40%',
                            scrub: true
                        }
                    }
                );
            }

            // Apply animation to "What Our Clients Say" section
            const testimonialsText = document.getElementById('testimonials-text');
            if (testimonialsText) {
                const chars = splitTextIntoChars(testimonialsText.textContent);
                testimonialsText.innerHTML = '';
                chars.forEach(char => testimonialsText.appendChild(char));

                gsap.fromTo(
                    chars,
                    {
                        willChange: 'opacity, transform',
                        opacity: 0,
                        yPercent: 120,
                        scaleY: 2.3,
                        scaleX: 0.7,
                        transformOrigin: '50% 0%'
                    },
                    {
                        duration: 1,
                        ease: 'back.inOut(2)',
                        opacity: 1,
                        yPercent: 0,
                        scaleY: 1,
                        scaleX: 1,
                        stagger: 0.03,
                        scrollTrigger: {
                            trigger: testimonialsText,
                            start: 'center bottom+=50%',
                            end: 'bottom bottom-=40%',
                            scrub: true
                        }
                    }
                );
            }

            // Apply animation to testimonial text
            const testimonialText = document.getElementById('testimonial-text');
            if (testimonialText) {
                const chars = splitTextIntoChars(testimonialText.textContent);
                testimonialText.innerHTML = '';
                chars.forEach(char => testimonialText.appendChild(char));

                gsap.fromTo(
                    chars,
                    {
                        willChange: 'opacity, transform',
                        opacity: 0,
                        yPercent: 120,
                        scaleY: 2.3,
                        scaleX: 0.7,
                        transformOrigin: '50% 0%'
                    },
                    {
                        duration: 1,
                        ease: 'back.inOut(2)',
                        opacity: 1,
                        yPercent: 0,
                        scaleY: 1,
                        scaleX: 1,
                        stagger: 0.03,
                        scrollTrigger: {
                            trigger: testimonialText,
                            start: 'center bottom+=50%',
                            end: 'bottom bottom-=40%',
                            scrub: true
                        }
                    }
                );
            }
        });

    </script>

    <!-- Cookie Popup -->
    <div class="cookie-card" id="cookiePopup">
     <svg version="1.1" id="cookieSvg" x="0px" y="0px" viewBox="0 0 122.88 122.25" xml:space="preserve"><g><path d="M101.77,49.38c2.09,3.1,4.37,5.11,6.86,5.78c2.45,0.66,5.32,0.06,8.7-2.01c1.36-0.84,3.14-0.41,3.97,0.95 c0.28,0.46,0.42,0.96,0.43,1.47c0.13,1.4,0.21,2.82,0.24,4.26c0.03,1.46,0.02,2.91-0.05,4.35h0v0c0,0.13-0.01,0.26-0.03,0.38 c-0.91,16.72-8.47,31.51-20,41.93c-11.55,10.44-27.06,16.49-43.82,15.69v0.01h0c-0.13,0-0.26-0.01-0.38-0.03 c-16.72-0.91-31.51-8.47-41.93-20C5.31,90.61-0.73,75.1,0.07,58.34H0.07v0c0-0.13,0.01-0.26,0.03-0.38 C1,41.22,8.81,26.35,20.57,15.87C32.34,5.37,48.09-0.73,64.85,0.07V0.07h0c1.6,0,2.89,1.29,2.89,2.89c0,0.4-0.08,0.78-0.23,1.12 c-1.17,3.81-1.25,7.34-0.27,10.14c0.89,2.54,2.7,4.51,5.41,5.52c1.44,0.54,2.2,2.1,1.74,3.55l0.01,0 c-1.83,5.89-1.87,11.08-0.52,15.26c0.82,2.53,2.14,4.69,3.88,6.4c1.74,1.72,3.9,3,6.39,3.78c4.04,1.26,8.94,1.18,14.31-0.55 C99.73,47.78,101.08,48.3,101.77,49.38L101.77,49.38z M59.28,57.86c2.77,0,5.01,2.24,5.01,5.01c0,2.77-2.24,5.01-5.01,5.01 c-2.77,0-5.01-2.24-5.01-5.01C54.27,60.1,56.52,57.86,59.28,57.86L59.28,57.86z M37.56,78.49c3.37,0,6.11,2.73,6.11,6.11 s-2.73,6.11-6.11,6.11s-6.11-2.73-6.11-6.11S34.18,78.49,37.56,78.49L37.56,78.49z M50.72,31.75c2.65,0,4.79,2.14,4.79,4.79 c0,2.65-2.14,4.79-4.79,4.79c-2.65,0-4.79-2.14-4.79-4.79C45.93,33.89,48.08,31.75,50.72,31.75L50.72,31.75z M119.3,32.4 c1.98,0,3.58,1.6,3.58,3.58c0,1.98-1.6,3.58-3.58,3.58s-3.58-1.6-3.58-3.58C115.71,34.01,117.32,32.4,119.3,32.4L119.3,32.4z M93.62,22.91c2.98,0,5.39,2.41,5.39,5.39c0,2.98-2.41,5.39-5.39,5.39c-2.98,0-5.39-2.41-5.39-5.39 C88.23,25.33,90.64,22.91,93.62,22.91L93.62,22.91z M97.79,0.59c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78 c-3.19,0-5.78-2.59-5.78-5.78C92.02,3.17,94.6,0.59,97.79,0.59L97.79,0.59z M76.73,80.63c4.43,0,8.03,3.59,8.03,8.03 c0,4.43-3.59,8.03-8.03,8.03s-8.03-3.59-8.03-8.03C68.7,84.22,72.29,80.63,76.73,80.63L76.73,80.63z M31.91,46.78 c4.8,0,8.69,3.89,8.69,8.69c0,4.8-3.89,8.69-8.69,8.69s-8.69-3.89-8.69-8.69C23.22,50.68,27.11,46.78,31.91,46.78L31.91,46.78z"/></g></svg>
      <p class="cookieHeading">We use cookies.</p>
      <p class="cookieDescription">This website uses cookies to ensure you get the best experience on our site.</p>

      <div class="buttonContainer">
        <button class="acceptButton" id="acceptCookies">Allow</button>
        <button class="declineButton" id="declineCookies">Decline</button>
      </div>


    </div>

    <script>
        // Scroll functions for buttons (if still present)
        function scrollLeft1() {
            // Logic for manual scroll if needed
        }

        function scrollRight1() {
            // Logic for manual scroll if needed
        }

        // Partner carousel functionality
        let currentPartnerSlide = 0;
        const partnerSlides = document.querySelectorAll('.partner-slide');
        const totalPartnerSlides = partnerSlides.length / 2; // Divide by 2 because we duplicated
        const isMobilePartnerView = () => window.matchMedia('(max-width: 768px)').matches;

        function updatePartnerCarousel() {
            if (isMobilePartnerView() || !partnerSlides.length) return;
            const carousel = document.getElementById('partner-carousel');
            const slideWidth = partnerSlides[0].offsetWidth;
            carousel.style.transform = `translateX(-${currentPartnerSlide * slideWidth}px)`;
        }

        function nextPartnerSlide() {
            if (isMobilePartnerView()) return;
            currentPartnerSlide = (currentPartnerSlide + 1) % totalPartnerSlides;
            updatePartnerCarousel();
        }

        function prevPartnerSlide() {
            if (isMobilePartnerView()) return;
            currentPartnerSlide = (currentPartnerSlide - 1 + totalPartnerSlides) % totalPartnerSlides;
            updatePartnerCarousel();
        }

        // Auto-play partner carousel on desktop/tablet only
        setInterval(() => {
            if (!isMobilePartnerView()) nextPartnerSlide();
        }, 3000);
    </script>

    @include('partials.analytics')
</body>
</html>
