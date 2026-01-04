<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="{{ session('theme') === 'dark' ? 'dark' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />

    @if (app()->environment('production'))
        <!-- Google tag (gtag.js) -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=G-RBQQR8LJCY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-RBQQR8LJCY');
        </script>

        <!-- Microsoft Clarity -->
        <script type="text/javascript">
            (function(c, l, a, r, i, t, y) {
                c[a] = c[a] || function() {
                    (c[a].q = c[a].q || []).push(arguments)
                };
                t = l.createElement(r);
                t.async = 1;
                t.src = "https://www.clarity.ms/tag/" + i;
                y = l.getElementsByTagName(r)[0];
                y.parentNode.insertBefore(t, y);
            })(window, document, "clarity", "script", "uw517vzhas");
        </script>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        <div class="fixed bottom-4 left-4 right-4 z-50 sm:left-auto sm:right-4 sm:w-full sm:max-w-md">
            <x-alerts />
        </div>

        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
