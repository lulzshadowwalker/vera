<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') === 'dark' ? 'dark' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
          rel="stylesheet">

    <script src="https://kit.fontawesome.com/a51f251d24.js"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiunicornstudio/unicornstudio.js@v1.4.36/dist/unicornStudio.umd.js"></script>

    <link rel="stylesheet"
          href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/sidebar.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/dropdown-menu.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col">
    <x-header />

    <main class="bg-background text-foreground mt-18 flex-1">
        @yield('content')
    </main>

    <x-footer />

    <div class="fixed left-4 right-4 top-4 z-50 sm:bottom-4 sm:left-auto sm:right-4 sm:top-auto sm:w-full sm:max-w-md">
        <x-alerts />
    </div>

    <script>
        function toggleTheme() {
            fetch('{{ route('theme.toggle') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            });
        }
    </script>

    @stack('scripts')
</body>

</html>
