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
                <span class="font-weight-bold" style="font-size: 16px;">🔐 Edit User</span>
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row my-4">
                        <div class="col-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" value="{{ $user->name }}" placeholder="User name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{ $user->email }}" placeholder="User email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-12 justify-content-center">
                            <button type="submit" class="button btn btn-block btn-primary">
                                Update User's Data
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
