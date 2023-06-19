@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold">New Distribution</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/distribution">Distribution</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('distribution.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="mustahik_id">Mustahik</label>
                    <select required class="form-control" id="mustahik_id" name="mustahik_id">
                        <option disabled selected>Select One</option>
                        @foreach($mustahik as $ms)
                        <option value="{{ $ms->id }}">{{ $ms->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount_money">Amount Money</label>
                    <input required type="number" min="0" class="form-control" id="amount_money" placeholder="Money currency is rupiah" name="amount_money">
                </div>
                <div class="form-group">
                    <label for="amount_rice">Amount Rice</label>
                    <input required type="number" min="0" class="form-control" id="amount_rice" placeholder="Weight is in Kilogram" name="amount_rice">
                </div>
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea required class="form-control" id="notes" rows="3" name="notes"></textarea>
                </div>
                <div class="form-group">
                    <label for="distributed_at">Distribution Time</label>
                    <input required type="datetime-local" class="form-control" id="distributed_at" name="distributed_at">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select required class="form-control" id="status" name="status">
                        <option disabled selected>Select One</option>
                        <option value="0">Not Delivered</option>
                        <option value="1">Delivered</option>
                        <option value="2">Pending</option>
                        <option value="3">Cancelled</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/distribution" class="btn btn-secondary mr-3">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
