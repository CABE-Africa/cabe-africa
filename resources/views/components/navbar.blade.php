<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a href="{{ route("welcome") }}" class="navbar-brand">
            <img height="48" src="{{ asset('images/logo.png') }}" alt="CABE Africa">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#global-navigation-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="global-navigation-menu">
            <ul class="navbar-nav me-md-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a href="#" id="who-we-are-dropdown-toggler" class="nav-link d-flex gap-1 align-items-top custom-dropdown-toggle"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Who We Are</a>
                    <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="who-we-are-dropdown-toggler">
                        <li><a href="#" class="dropdown-item text-muted">About Us</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Where We Work</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Our Team</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="what-we-do-dropdown-toggler" class="nav-link"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">What We Do</a>
                    <ul class="dropdown-menu py-0" aria-labelledby="what-we-do-dropdown-toggler">
                        <li><a href="#" class="dropdown-item text-muted">Programs</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Projects</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Consultancies</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="publications-dropdown-toggler" class="nav-link"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Publications</a>
                    <ul class="dropdown-menu py-0" aria-labelledby="publications-dropdown-toggler">
                        <li><a href="#" class="dropdown-item text-muted">Press Release</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Events</a></li>
                        <li><a href="#" class="dropdown-item text-muted">News</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Blog</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="resources-dropdown-toggler" class="nav-link"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                    <ul class="dropdown-menu py-0" aria-labelledby="resources-dropdown-toggler">
                        <li><a href="#" class="dropdown-item text-muted">Reports</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Gallery</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Audio</a></li>
                        <li><a href="#" class="dropdown-item text-muted">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
            </ul>
            @auth
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="d-inline-flex align-items-center gap-2">
                            <span>{{ auth()->user()->name }}</span>
                            <i class="fa-solid fa-xl fa-user"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @if (str()->is(auth()->user()->email, 'azenga@cabe-africa.org'))
                        <li>
                            <a href="{{ route('dashboard') }}" class="dropdown-item text-muted d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-1x fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @endif
                        @if (!request()->routeIs('home'))
                        <li>
                            <a href="{{ route('home') }}" class="dropdown-item text-muted d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-1x fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#logout-modal" class="dropdown-item text-muted d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-1x fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </button>
                        </li>
                    </ul>
                </li>                
            </ul>
            @else
            <div class="d-flex">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">My Account</a>
                @endif
            </div>
            @endauth
        </div>
    </div>
</nav>