<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <a class="uk-btn uk-btn-default" href="">button</a>
    <button class="uk-btn uk-btn-default">button?</button>
    <button class="uk-btn uk-btn-default" disabled>button</button>
</body>

</html>
