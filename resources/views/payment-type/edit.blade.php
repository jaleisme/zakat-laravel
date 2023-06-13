@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <h3 class="font-weight-bold">Edit Payment Type</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/payment-type">Payment Type</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('payment-type.update', $paymentType->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Payment Type Name</label>
                    <input required type="text" class="form-control" id="name" placeholder="Ex. Rice" name="payment_type_name" value="{{ $paymentType->payment_type_name }}">
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/payment-type" class="btn btn-secondary mr-3">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
