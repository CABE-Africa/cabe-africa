<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @hasSection ('title')
    <title>@yield('title') - {{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>
    @else
    <title>Welcome - {{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>
    @endif

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>

<body class="antialiased">
    
    @yield('body')

    @stack('modals')
    
    <script src="{{ mix("js/app.js") }}"></script>

    @stack('scripts')
</body>

</html>