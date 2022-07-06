@extends('layouts.base')

@section('title', 'Sign In')

@section('body')
<div class="row g-0 min-vh-100">
    <div class="col-md-6 bg-primary"></div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="w-50">
            <h1>Sign In</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="">
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
                <div class="mt-3"><a href="#">Forgot password?</a></div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary text-white w-100 rounded-pill">Sign In</button>
                </div>

                <hr class="my-4">

                @if (Route::has('register'))
                    <div class="d-flex flex-wrap gap-2 justify-content-md-center"><span>Don't have an account?</span><a href="{{ route('register') }}" class="">Sign Up</a></div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection