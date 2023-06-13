@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold">Edit Data Payment</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/payment">Payment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('payment.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Muzakki's Info -->
                <input type="hidden" name="muzakki_id" value="{{ $data->muzakki_id }}">
                <div class="row mt-3">
                    <div class="col-12">
                        <h5 class="font-weight-bold">Muzakki's Information</h5>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input required type="text" class="form-control" id="name" placeholder="Ex. James" name="fullname" value="{{ $data->fullname }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Address</label>
                            <textarea required class="form-control" id="description" rows="3" name="address">{{ $data->address }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Payment Info -->
                <div class="row mt-3 mb-5">
                    <div class="col-12">
                        <h5 class="font-weight-bold">Payment Information</h5>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="number_of_person">Number of Person</label>
                            <input required type="text" class="form-control" id="number_of_person" placeholder="Ex. 1" name="number_of_person" value="{{ $data->number_of_person }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="payment_type_id">Payment Type</label>
                            <select required type="text" class="form-control" id="payment_type_id" name="payment_type_id">
                                <option disabled selected>Select One</option>
                                @foreach($paymentType as $pt)
                                <option @if($pt->id === $data->payment_type_id) selected @endif value="{{ $pt->id }}">{{ $pt->payment_type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input required type="text" class="form-control" id="amount" placeholder="Ex. 100000 (Money) or 10 (rice in Kg)" name="amount" value="{{ $data->amount }}">
                            <small>Please only fill with zakat amount as the usual money number format or rice in Kg</small>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/payment" class="btn btn-secondary mr-3">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
