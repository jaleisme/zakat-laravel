@extends('layouts.app')

@section('custom-css')
<style>
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
    <!-- Hero -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-success text-white">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('img/dashboard-hero.svg') }}" alt="" class="w-100">
                    </div>
                    <div class="col-10">
                        <h3 class="font-weight-bold">Hello there, {{ Auth::user()->name }}!</h3>
                        <p>We're delighted to have you back in MyZakat. Here's everything you need to efficiently manage and oversee the Zakat operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="row" style="margin-top: 32px;">
        <div class="col-3">
            <div class="card">
                <h2 class="font-weight-bold text-center text-dark">{{ $mustahikCount }}</h2>
                <span class="font-weight-bold text-center" style="font-size: 16px;">👥 Mustahik</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <h2 class="font-weight-bold text-center text-dark">{{ $muzakkiCount }}</h2>
                <span class="font-weight-bold text-center" style="font-size: 16px;">🤲🏻 Muzakki</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <h2 class="font-weight-bold text-center text-dark">{{ $paymentCount }}</h2>
                <span class="font-weight-bold text-center" style="font-size: 16px;">💰 Payment</span>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <h2 class="font-weight-bold text-center text-dark">{{ $distributionCount }}</h2>
                <span class="font-weight-bold text-center" style="font-size: 16px;">✍🏻 Distribution</span>
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="row" style="margin-top: 32px; margin-bottom: 32px;">
        <div class="col-6">
            <div class="card">
                <span class="font-weight-bold" style="font-size: 16px;">📊 Zakat Collection</span>
                <div class="d-flex mt-3 justify-content-between">
                    <span>Collected Money</span>
                    <span>Rp.{{ $collectedMoney }}</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Collected Rice</span>
                    <span>{{ $collectedRice }} Kg</span>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <span class="font-weight-bold" style="font-size: 16px;">✍🏻 Zakat Distribution</span>
                <div class="d-flex mt-3 justify-content-between">
                    <span>Distributed Money</span>
                    <span>Rp.{{ $resultDistributed->distributedMoney }}</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Distributed Rice</span>
                    <span>{{ $resultDistributed->distributedRice }} Kg</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
