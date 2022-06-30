<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config("app.name", "Center of African Bio-Entrepreneurship") }}</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>

<body class="antialiased">
    <!-- Hero -->
    <div id="hero" class="d-flex flex-column min-vh-100">
        <!-- Header -->
        <header class="shadow-sm">
            <div class="bg-primary">
                <div class="container">
                    <div class="d-flex gap-3 justify-content-md-between">
                        <div class="d-flex gap-3 p-2">
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
                        <ul class="navbar-nav me-md-auto mb-2 mb-lg-0 text-uppercase">
                            <li class="nav-item dropdown">
                                <a href="#" id="who-we-are-dropdown-toggler" class="nav-link text-uppercase dropdown-toggle"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Who We Are</a>
                                <ul class="dropdown-menu py-0" aria-labelledby="who-we-are-dropdown-toggler">
                                    <li><a href="#" class="dropdown-item text-muted">About Us</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Where We Work</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" id="what-we-do-dropdown-toggler" class="nav-link text-uppercase dropdown-toggle"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">What We Do</a>
                                <ul class="dropdown-menu py-0" aria-labelledby="what-we-do-dropdown-toggler">
                                    <li><a href="#" class="dropdown-item text-muted">Programs</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Projects</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Consultancies</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" id="publications-dropdown-toggler" class="nav-link text-uppercase dropdown-toggle"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Publications</a>
                                <ul class="dropdown-menu py-0" aria-labelledby="publications-dropdown-toggler">
                                    <li><a href="#" class="dropdown-item text-muted">Press Release</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Events</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">News</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Blog</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" id="resources-dropdown-toggler" class="nav-link text-uppercase dropdown-toggle"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                                <ul class="dropdown-menu py-0" aria-labelledby="resources-dropdown-toggler">
                                    <li><a href="#" class="dropdown-item text-muted">Reports</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Gallery</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Audio</a></li>
                                    <li><a href="#" class="dropdown-item text-muted">Videos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Carousel -->
        <div id="hero-caroussel" class="carousel slide flex-grow-1 bg-primary" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-caroussel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-caroussel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel/east-africa-rice-conference.jpg') }}"
                        class="carousel-image object-cover d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-primary fw-bold">East African Rice Conference 2021</h5>
                        <p class="lead">Naivasha Enashapai Resort & Spa.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/utafiti-sera.jpg') }}"
                        class="carousel-image object-cover d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-primary fw-bold">Utafiti Sera III</h5>
                        <p class="lead">Enhance evidence uptake for better policies, development programmes and outcome.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-caroussel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-caroussel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section id="our-latest-news" class="py-4 bg-light-gray d-none d-md-block">
        <h2 class="text-center">Our Latest News</h2>
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="card h-100 bg-light-green">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/prof-hamadi-boga.jpg') }}" alt="Some Image"
                                    class="img-fluid h-100 object-cover rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="text-muted">May 28, 2021</span>
                                    <h5 class="card-title">SIVAP Counties receive goodies</h5>
                                    <p class="card-text">The Principal Secretary, State Department for Crop Development
                                        Agricultural Research
                                        in the Ministry of Agriculture, Livestock, Fisheries and Cooperatives Prof.
                                        Hamadi
                                        Boga today flagged off a consignment of seeds, seedlings, and other related
                                        inputs
                                        worth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-light-green">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/csm_korea_drone_story.jpg') }}" alt="Some Image"
                                    class="img-fluid h-100 object-cover rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="text-muted">May 23, 2021</span>
                                    <h5 class="card-title">Korea showcases impact of drone technology on agricultural
                                        productivity</h5>
                                    <p class="card-text">Drone technology is being used to collect and analyse data, and
                                        monitor irrigated areas, combat pests At a special event highlighting the
                                        partnership between the African Development Bank (www.AfDB.org) and Korea held
                                        on the sidelines of the Bank’s Annual Meetings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mobile-latest-news" class="d-md-none py-4 bg-light">
        <h2 class="text-center">Our Latest News</h2>
        <div class="container mt-3">
            <div class="row g-4 row-cols-1 row-cols-sm-2">
                <div class="col">
                    <div class="card h-100 bg-light-green">

                        <img src="{{ asset('images/prof-hamadi-boga.jpg') }}" alt="Some Image"
                            class="card-img-top">
                        <div class="card-body">
                            <span class="text-muted">May 28, 2021</span>
                            <h5 class="card-title">SIVAP Counties receive goodies</h5>
                            <p class="card-text">The Principal Secretary, State Department for Crop Development
                                Agricultural Research
                                in the Ministry of Agriculture, Livestock, Fisheries and Cooperatives Prof.
                                Hamadi
                                Boga today flagged off a consignment of seeds, seedlings, and other related
                                inputs
                                worth</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-light-green">
                        <img src="{{ asset('images/csm_korea_drone_story.jpg') }}" alt="Some Image"
                            class="card-img-top">
                        <div class="card-body">
                            <span class="text-muted">May 23, 2021</span>
                            <h5 class="card-title">Korea showcases impact of drone technology on agricultural
                                productivity</h5>
                            <p class="card-text">Drone technology is being used to collect and analyse data, and
                                monitor irrigated areas, combat pests At a special event highlighting the
                                partnership between the African Development Bank (www.AfDB.org) and Korea held
                                on the sidelines of the Bank’s Annual Meetings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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