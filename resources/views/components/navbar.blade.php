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
            <div class="d-flex">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">My Account</a>
                @endif
            </div>
        </div>
    </div>
</nav>