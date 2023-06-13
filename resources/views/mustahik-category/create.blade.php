@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold">New Mustahik Category</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/mustahik-category">Mustahik Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('mustahik-category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input required type="text" class="form-control" id="name" placeholder="Ex. Fakir" name="category_name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea required class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Percentage</label>
                    <div class="input-group mb-3">
                        <input required type="number" class="form-control" id="percentage" placeholder="Ex. 30" min="0" max="100" name="percentage">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">%</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="/mustahik-category" class="btn btn-secondary mr-3">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
