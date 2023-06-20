@extends('layouts.app')

@section('custom-css')
<style>
    *{
        font-family: 'Montserrat', 'sans-serif';
        font-size: 14px;
    }
    .text-success{
        color: #019147 !important;
    }
    /* Outline None */
    .form-control:hover, .form-control:focus, .form-control:active, .form-control:active:focus,
    .form-control .form-control:not(:disabled):not(.disabled):active,
    .form-control .form-control:not(:disabled):not(.disabled):active:focus {
        outline: none !important;
        box-shadow:none !important;
        border: 1px solid #dee2e6;
    }
</style>
<!-- <link rel="stylesheet" href="{{ asset('css/login.css') }}"> -->
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card" style="border-radius: 32px;">
                <div class="card-body p-0">
                    <div class="row p-0 d-flex justify-content-center align-items-center">
                        <div class="col-6 bg-success" style="border-radius: 32px 0 0 32px;">
                            <img src="{{asset('img/mobile-illustration.svg')}}" class="w-100" alt="">
                        </div>
                        <div class="col-6 py-5 px-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h4 class="font-weight-bold">Login</h4>
                                        <span>Please login with your account first.</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        @if (Route::has('password.request'))
                                            <a class="text-decoration-none text-secondary" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="button btn btn-block btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        <div class="text-center mt-3">
                                            If you doesn't have any account,
                                            <a href="/register" class="text-decoration-none text-success">Click Here</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container w-100">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="bg-login">
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ex. johndoe@gmail.com">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div> -->
@endsection
