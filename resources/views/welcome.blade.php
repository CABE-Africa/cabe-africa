@extends('layouts.base')

@section('body')
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
        <x-navbar />
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

<section id="what-we-do" class="bg-white" aria-labelledby="what-we-do-title">
    <div class="container py-5">
        <h2 id="what-we-do-title" class="text-center">What we do</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pt-4">
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-solid fa-lightbulb fa-4x"></i></span>
                    <h5 class="fw-bold">Capacity Building and Training</h5>
                    <p class="text-muted">We equip our clients with business skills, tools, and knowledge to enable them to improve their business operations. </p>
                </div>
            </div>
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-brands fa-react fa-4x"></i></span>
                    <h5 class="fw-bold">Market Linkages</h5>
                    <p class="text-muted">We link our clients in different agribusiness value chains to their appropriate customers.</p>
                </div>
            </div>
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-solid fa-display fa-4x"></i></span>
                    <h5 class="fw-bold">Access to improved inputs</h5>
                    <p class="text-muted">We link our clients to improved farm tools, fertilizers, and the latest technologies to our clients.</p>
                </div>
            </div>
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-solid fa-sack-dollar fa-4x"></i></span>
                    <h5 class="fw-bold">Financial Services</h5>
                    <p class="text-muted">We train financial skills and finance our clients in agribusiness value chains to ensure business continuity.</p>
                </div>
            </div>
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-solid fa-puzzle-piece fa-4x"></i></span>
                    <h5 class="fw-bold">Access to Extension Services</h5>
                    <p class="text-muted">We link our clients in different agribusiness value chains to more suitable extension services.</p>
                </div>
            </div>
            <div class="col p-5 p-md-3 p-ld-5">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="text-primary"><i class="fa-solid fa-users fa-4x"></i></span>
                    <h5 class="fw-bold">Consultancy</h5>
                    <p class="text-muted">We provide consultancy services to our esteem clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('modals')
    <x-modals.logout />
@endpush

@push('scripts')
<script>
    const header = document.querySelector('header');

    const headerHeight = header.offsetHeight;

    const carouselImages = document.querySelectorAll('.carousel-image');

    carouselImages.forEach(image => {
        image.style.height = `calc(100vh - ${headerHeight}px)`;
    });
</script>
@endpush