<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>

<body class="antialiased text-center">
    <header class="shadow-sm">
        <div class="bg-primary">
            <div class="container">
                <div class="d-flex gap-3 justify-content-md-between">
                    <div class="d-flex gap-3 p-2 p-md-3">
                        <a href="#" class="text-white text-decoration-none d-inline-flex gap-2 align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <span class="d-none d-sm-inline">+254714097380</span>
                        </a>
                        <a href="#" class="text-white text-decoration-none d-inline-flex gap-2 align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="d-none d-sm-inline">info@cabe-africa.org</span>
                        </a>
                    </div>
                    <div class="d-flex">
                    <a href="#" class="text-white text-decoration-none d-inline-flex gap-2 align-items-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span class="d-none d-sm-inline">Careers</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img height="48" src="{{ asset('images/logo.png') }}" alt="CABE Africa">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#global-navigation-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="global-navigation-menu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Who We Are</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">What We Do</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">News and Publications</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Blogs</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="{{ mix("js/app.js") }}"></script>
</body>

</html>