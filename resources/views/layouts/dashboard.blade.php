@extends('layouts.base')

@section('metas')
<meta name="robots" content="noindex, nofollow">
@endsection

@section('body')
<div id="wrapper" class="vh-100 row g-0 bg-light">
    <div id="sidebar" class="h-100 d-none d-md-block col-md-3 col-lg-2 bg-primary overflow-y-auto">
        <div class="d-flex">
            <div class="p-3 text-white d-flex gap-2 align-items-center flex-grow-1">
                <i class="fa-solid fa-xl fa-user"></i>
                <span class="fs-5 fw-bold">{{ auth()->user()->name }}</span>
            </div>
            <div>
                <button id="hide-sidebar" class="btn d-none text-white fs-4">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <hr class="bg-white">
        <ul role="list" class="nav flex-column">
            <li class="nav-item btn-dashboard">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'text-white' : 'text-white-50' }}"
                    href="{{ route('dashboard') }}">
                    <div class="hstack gap-3">
                        <span><i class="fa fa-1x fa-tachometer-alt"></i></span>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div id="content" class="vh-100 col-md-9 col-lg-10 d-flex flex-column">
        <nav class="px-2 bg-white shadow-sm d-flex align-items-center justify-content-between px-md-3 py-1">
            <div>
                <button id="sidebar-toggler" class="btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <ul class="list-unstyled my-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="d-inline-flex gap-2 align-items-center">
                            <span>{{ auth()->user()->name }}</span>
                            <i class="fa fa-lg fa-user"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item text-muted" href="{{ route('home') }}">
                                <i class="fa-solid fa-1x fa-home"></i>
                                <span class="ms-2">Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-muted" href="#" data-bs-toggle="modal"
                                data-bs-target="#logout-modal">
                                <span><i class="fa-solid fa-1x fa-sign-out-alt"></i></span>
                                <span class="ms-2">Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3 overflow-y-auto flex-grow-1">
            @yield('content')
        </div>
    </div>
</div>
@endsection

@push('modals')
<x-modals.logout />
@endpush

@push('scripts')
<script>
    $("#sidebar-toggler").click(function () {

        const width = $(window).width();

        if (width < 768) {

            $("#sidebar").toggleClass("d-none");
            $("#content").toggleClass("d-none");

            $("#hide-sidebar").toggleClass('d-none');

        } else {

            $("#sidebar").toggleClass('d-md-block');
            $("#content").toggleClass('col-md-9 col-lg-10').toggleClass('col-12');

        }
    });

    $("#hide-sidebar").click(function () {

        const width = $(window).width();

        if (width < 768) {
            $("#sidebar").toggleClass("d-none");
            $("#content").toggleClass("d-none");

            $("#hide-sidebar").toggleClass('d-none');
        }

    });
</script>
@endpush