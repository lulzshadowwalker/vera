<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col">
    <x-header />
    <main class="bg-background text-foreground flex-1">
        <div
             class="fixed left-4 right-4 top-4 z-50 sm:bottom-4 sm:left-auto sm:right-4 sm:top-auto sm:w-full sm:max-w-md">
            <x-alerts />
        </div>

        @yield('content')
    </main>
    <x-footer />

    @stack('scripts')
</body>

</html>
