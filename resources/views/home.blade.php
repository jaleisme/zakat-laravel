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
                    <span>Collected Money ({{ $collectedMoneySum->nop }} People)</span>
                    <span>Rp.{{ $collectedMoney }}</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Collected Rice ({{ $collectedRiceSum->nop }} People)</span>
                    <span>{{ $collectedRice }} Kg</span>
                </div>

                @foreach($paymentByAmil as $data)
                <div class="d-flex mt-2 justify-content-between">
                    <span>Collected by {{ $data['amil_name'] }}</span>
                    <span>{{ $data['count'] }} People</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="row">
                    <div class="col-12">
                        <span class="font-weight-bold" style="font-size: 16px;">✍🏻 Zakat Distribution</span>
                    </div>
                    <div class="col-12 mt-2">
                        <button class="w-20 btn-sm btn-primary" style="font-size: 12px; border-radius: 4px;">
                            Delivered <span class="ml-1 badge badge-light">{{ $delivered }}</span>
                        </button>

                        <button class="w-20 btn-sm btn-secondary" style="font-size: 12px; border-radius: 4px;">
                            Not Delivered <span class="ml-1 badge badge-light">{{ $notDelivered }}</span>
                        </button>

                        <button class="w-20 btn-sm btn-warning" style="font-size: 12px; border-radius: 4px;">
                            Pending <span class="ml-1 badge badge-light">{{ $pending }}</span>
                        </button>

                        <button class="w-20 btn-sm btn-danger" style="font-size: 12px; border-radius: 4px;">
                            Cancelled <span class="ml-1 badge badge-light">{{ $cancelled }}</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Distributed Money</span>
                    <span class="text-success">Rp.{{ $resultDistributed->distributedMoney }}</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Distributed Rice</span>
                    <span class="text-success">{{ $resultDistributed->distributedRice }} Kg</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Undistributed Money</span>
                    <span class="text-danger">Rp.{{ $resultUndistributed->distributedMoney }}</span>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <span>Undistributed Rice</span>
                    <span class="text-danger">{{ $resultUndistributed->distributedRice }} Kg</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
@endsection
