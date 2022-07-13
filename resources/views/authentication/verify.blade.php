@extends('layouts.base')

@section('title', 'Verify Email')

@section('body')
<div class="row g-0 min-vh-100">
    <div class="col-md-6 bg-primary bg-gradient p-3 p-sm-4 p-md-5">
        <div class="d-flex flex-column gap-3 align-items-start">
            <a href="{{ route('welcome') }}" class="btn btn-light d-inline-flex gap-2 align-items-center rounded-pill">
                <i class="fa-solid fa-arrow-left-long"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('welcome') }}" class="display-6 text-decoration-none text-white">Center for Africa Bio-Entrepreneurship</a>

            <p class="lead text-white-50">All you need to know agriculture and agripreneurship in Africa in one place</p>

            <img class="w-100 img-thumbnail d-none d-md-block" src="{{ asset('images/it-in-the-field-2.jpg') }}" alt="IT in the Field">
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="w-75 w-md-50">
            <h1>Verify Email</h1>
            <x-feedback />
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <p class="lead">Please click the verification link sent to your email, to verify your email address</p>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary text-white w-100 rounded-pill">Resend Link</button>
                </div>

                <hr class="my-4">

                <div>
                    <a href="{{ route('login') }}" class="d-flex flex-wrap gap-2 align-items-center text-decoration-none">
                        <i class="fa-solid fa-arrow-left-long"></i>
                        <span>Back to login</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection