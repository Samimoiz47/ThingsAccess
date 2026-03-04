<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms of Service - ThingsAccess</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700" rel="stylesheet" />
    <style>body { font-family: 'Instrument Sans', sans-serif; }</style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Navbar (Simplified) -->
    <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between w-full max-w-7xl mx-auto px-6 py-6 border-b border-white/10 bg-black/80 backdrop-blur-md">
        <a href="/" class="text-xl font-bold tracking-wider text-white">THINGS ACCESS</a>
        <a href="/" class="text-sm text-gray-400 hover:text-white transition-colors">Back to Home</a>
    </header>

    <main class="pt-32 pb-20 px-6 max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">Terms of Service</h1>
        <div class="prose prose-invert max-w-none text-gray-300">
            <p class="lead text-xl mb-8">Last updated: January 8, 2026</p>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">1. Acceptance of Terms</h2>
            <p class="mb-4">By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. In addition, when using these distinct services, you shall be subject to any posted guidelines or rules applicable to such services.</p>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">2. Intellectual Property</h2>
            <p class="mb-4">All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of ThingsAccess or its content suppliers and protected by international copyright laws.</p>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">3. Use License</h2>
            <p class="mb-4">Permission is granted to temporarily download one copy of the materials (information or software) on ThingsAccess's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
            <ul class="list-disc pl-6 mb-4 space-y-2">
                <li>modify or copy the materials;</li>
                <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                <li>attempt to decompile or reverse engineer any software contained on ThingsAccess's website;</li>
                <li>remove any copyright or other proprietary notations from the materials; or</li>
                <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
            </ul>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">4. Disclaimer</h2>
            <p class="mb-4">The materials on ThingsAccess's website are provided on an 'as is' basis. ThingsAccess makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">5. Limitation of Liability</h2>
            <p class="mb-4">In no event shall ThingsAccess or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on ThingsAccess's website, even if ThingsAccess or a ThingsAccess authorized representative has been notified orally or in writing of the possibility of such damage.</p>

            <h2 class="text-2xl font-bold text-white mt-8 mb-4">6. Governing Law</h2>
            <p class="mb-4">These terms and conditions are governed by and construed in accordance with the laws of California and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
