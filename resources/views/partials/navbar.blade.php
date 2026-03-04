<!-- Navigation Hub -->
<header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between w-full max-w-7xl mx-auto px-6 py-6 transition-all duration-300" id="navbar" role="banner">
    <a href="/" class="flex items-center gap-2 cursor-pointer group z-20" aria-label="ThingsAccess - Go to homepage">
        {!! App\Helpers\ImageHelper::optimizeImage('images/things access logo.png', ['loading' => 'eager', 'alt' => 'Things Access Logo', 'class' => 'h-12 w-auto', 'width' => '48', 'height' => '48']) !!}
    </a>

    <nav class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 items-center space-x-1 glass-panel px-2 py-1.5 rounded-full z-20" role="navigation" aria-label="Main navigation">
        <a href="/" class="px-5 py-2 text-sm font-medium text-white bg-white/10 rounded-full transition-all" aria-current="page">Home</a>
        <a href="/portfolio" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a>
        <!-- <a href="/expertise" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Solutions</a> -->
        <a href="/about" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">About</a>
        <a href="/contact" class="px-5 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Contact</a>
    </nav>

    <div class="relative hidden md:block z-20">
        <button id="projects-dropdown-btn" class="px-6 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors shadow-[0_0_15px_rgba(255,255,255,0.2)] flex items-center gap-2" aria-label="Live projects dropdown">
            Live Projects
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <ul id="projects-dropdown" class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg z-30" style="height: 0; overflow: hidden; transition: height 0.3s ease; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
            <li><a href="https://thingsaccess.com/SmartHome" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Smart Home</a></li>
            <li><a href="http://thingsaccess.com/rms_portal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Solar RMS</a></li>
            <li><a href="http://thingsaccess.com/STMS/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Smart Turbine System</a></li>
            <li><a href="http://thingsaccess.com/rw-dashboard/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rain Water</a></li>
            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Things School LMS</a></li>
        </ul>
    </div>

    <button class="md:hidden p-2 text-white/80 hover:text-white ml-auto z-20" id="mobile-menu-btn" aria-label="Open mobile menu" aria-expanded="false" aria-controls="mobile-menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed inset-0 z-40 bg-black/95 backdrop-blur-md md:hidden opacity-0 pointer-events-none transition-opacity duration-300" role="dialog" aria-modal="true" aria-label="Mobile navigation menu">
    <div class="flex flex-col items-center justify-center h-full space-y-8">
        <a href="/" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Home</a>
        <a href="/portfolio" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Portfolio</a>
        <a href="/expertise" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">Solutions</a>
        <a href="/about" class="text-2xl font-bold text-white hover:text-blue-400 transition-colors">About</a>

        <a href="/contact" class="px-8 py-4 bg-white text-black text-lg font-semibold rounded-full hover:bg-gray-200 transition-colors mt-8">
            Contact Us
        </a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const projectsDropdownBtn = document.getElementById('projects-dropdown-btn');
    const projectsDropdown = document.getElementById('projects-dropdown');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);

            if (!isExpanded) {
                mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // Close mobile menu when clicking on links
        mobileMenu.addEventListener('click', function(e) {
            if (e.target.tagName === 'A') {
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            }
        });
    }

    if (projectsDropdownBtn && projectsDropdown) {
        projectsDropdownBtn.addEventListener('mouseenter', function(e) {
            projectsDropdown.style.height = '195px';
        });

        projectsDropdownBtn.addEventListener('mouseleave', function(e) {
            projectsDropdown.style.height = '0';
        });

        projectsDropdown.addEventListener('mouseenter', function(e) {
            projectsDropdown.style.height = '195px';
        });

        projectsDropdown.addEventListener('mouseleave', function(e) {
            projectsDropdown.style.height = '0';
        });
    }
});
</script>
