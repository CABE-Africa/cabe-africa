@extends('layouts.base')

@section('body')
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

<main>
    @yield('main')
</main>
@endsection

@push('modals')
<x-modals.logout />
@endpush