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
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card" style="border-radius: 32px;">
                <div class="card-body p-0">
                    <div class="row p-0 d-flex justify-content-center align-items-center">
                        <div class="col-6 bg-success" style="border-radius: 32px 0 0 32px;">
                            <img src="{{asset('img/Checklist.svg')}}" class="w-100" alt="">
                        </div>
                        <div class="col-6 py-5 px-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <h4 class="font-weight-bold">Register</h4>
                                        <span>Please fill out the form below.</span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="/" class="text-secondary">Back to Landing</a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-12 justify-content-between">
                                        <button type="submit" class="button btn-block btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                        <div class="text-center mt-3">
                                            If you already have an account,
                                            <a href="/login" class="text-decoration-none text-success font-weight-bold">Click Here</a>
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
@endsection
