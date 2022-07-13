@extends('layouts.base')

@section('title', 'Sign In')

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
            <h1>Sign Up</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        autocomplete="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        autocomplete="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" id="phone"
                        class="form-control @error('phone') is-invalid @enderror"
                        autocomplete="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" 
                        class="form-control @error('password') is-invalid @enderror"
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirm-password" 
                        class="form-control @error('confirm_password') is-invalid @enderror"
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary text-white w-100 rounded-pill">Sign Up</button>
                </div>

                <hr class="my-4">

                @if (Route::has('register'))
                    <div class="d-flex flex-wrap gap-2 justify-content-md-center"><span>Don't have an account?</span><a href="{{ route('login') }}" class="">Sign In</a></div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection