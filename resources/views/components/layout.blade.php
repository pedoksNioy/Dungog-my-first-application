<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $heading ?? 'My Site' }}</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Neon text glow */
        .neon-text {
            text-shadow:
                0 0 5px #0ff,
                0 0 10px #0ff,
                0 0 20px #0ff,
                0 0 40px #0ff,
                0 0 80px #0ff;
        }
        /* Subtle neon glow */
        .neon-text-subtle {
            text-shadow:
                0 0 3px #0ff,
                0 0 6px #0ff;
        }
        /* Neon shadow for nav */
        .shadow-neon {
            box-shadow:
                0 0 10px #0ff,
                0 0 20px #0ff,
                0 0 30px #0ff;
        }
    </style>
</head>
<body class="min-h-screen bg-black text-white font-sans">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 flex items-center justify-between px-8 py-4 bg-black bg-opacity-90 border-b border-cyan-500 shadow-neon">
        <div>
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        </div>
        <div class="flex space-x-8">
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 px-8 flex flex-col items-center justify-center min-h-[calc(100vh-64px)]">
        <h1 class="text-5xl font-extrabold neon-text mb-6 text-center">{{ $heading }}</h1>
        <div class="text-cyan-300 text-lg max-w-2xl text-center leading-relaxed neon-text-subtle">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
