@extends('layouts.app')

@section('custom-css')
<style>
    *{
        font-size: 14px;
    }
    .card{
        padding: 48px;
        border-radius: 24px;
    }
    p{
        line-height: 150%;
    }
    .bg-success{
        background-color: #019147 !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <!-- Cards -->
    <div class="row" style="margin-top: 32px;">
        <div class="col-6 offset-3">
            <div class="card">
                <span class="font-weight-bold" style="font-size: 16px;">🔐 {{$user->name}}'s Account Settings</span>
                <form method="POST" action="{{ route('change-account-settings') }}">
                    @csrf
                    <div class="row my-4">
                        <div class="col-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" placeholder="Your name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Your email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Your new password">
                            <small class="text-muted">Please fill this field with your current password if you do not wish to change it.</small>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm password">
                            <small class="text-muted">Please fill this field with your current password if you do not wish to change it.</small>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-12 justify-content-between">
                            <button type="submit" class="button btn-block btn btn-primary">
                                Update Account Settings
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
