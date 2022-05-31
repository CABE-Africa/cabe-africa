<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>

<body class="antialiased text-center">
    <div id="hero" class="d-flex flex-column min-vh-100">
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
                    <a href="{{ route("welcome") }}" class="navbar-brand">
                        <img height="48" src="{{ asset('images/logo.png') }}" alt="CABE Africa">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#global-navigation-menu">
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
        <div id="carouselExampleCaptions" class="carousel slide flex-grow-1 bg-primary" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel/east-africa-rice-conference.jpg') }}"
                        class="carousel-image object-cover d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>East African Rice Conference 2021</h5>
                        <p>Naivasha Enashapai Resort & Spa.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/utafiti-sera.jpg') }}" 
                      class="carousel-image object-cover d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Utafiti Sera III</h5>
                        <p>Enhance evidence uptake for better policies, development programmes and outcome.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="{{ mix("js/app.js") }}"></script>
    <script>

        const header = document.querySelector('header');

        const headerHeight = header.offsetHeight;
        
        const carouselImages = document.querySelectorAll('.carousel-image');

        carouselImages.forEach(image => {
          image.style.height = `calc(100vh - ${headerHeight}px)`;
        });
    </script>
</body>

</html>