<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/things%20access%20logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/things%20access%20logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found - ThingsAccess</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=instrument-sans:300,400,500,600,700" rel="stylesheet" />
    <style>body { font-family: 'Instrument Sans', sans-serif; }</style>
</head>
<body class="bg-black text-white min-h-screen flex flex-col items-center justify-center relative overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 w-full h-full overflow-hidden -z-50 bg-black pointer-events-none">
         <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-black to-black"></div>
    </div>

    <main class="text-center px-6 relative z-10">
        <h1 class="text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-4 opacity-80">404</h1>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Page Not Found</h2>
        <p class="text-xl text-gray-400 max-w-lg mx-auto mb-10">
            The page you're looking for seems to have drifted into the digital void. Let's get you back on track.
        </p>

        <a href="/" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition-all transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            Return Home
        </a>
    </main>

</body>
</html>
