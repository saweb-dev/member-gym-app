<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gym App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white dark:bg-[#0f0f0f] min-h-screen">

    <x-navbar />

    <main class="max-w-6xl mx-auto p-6">
        {{ $slot }}
    </main>

    @livewireScripts
    <script>
        function toggleTheme() {
            const isDark = document.documentElement.classList.toggle('dark');
            window.theme = isDark ? 'dark' : 'light'
            localStorage.setItem('theme',  window.theme);
        }
    </script>
</body>
</html>