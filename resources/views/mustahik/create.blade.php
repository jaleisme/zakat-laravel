@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold">New Mustahik</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/mustahik">Mustahik</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('mustahik.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input required type="text" class="form-control" id="name" placeholder="Ex. James" name="fullname">
                </div>
                <div class="form-group">
                    <label for="description">Address</label>
                    <textarea required class="form-control" id="description" rows="3" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="mustahik_category_id">Category</label>
                    <select required type="text" class="form-control" id="mustahik_category_id" name="mustahik_category_id">
                        <option disabled selected>Select One</option>
                        @foreach($mustahikCategory as $mc)
                        <option value="{{ $mc->id }}">{{ $mc->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/mustahik" class="btn btn-secondary mr-3">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
