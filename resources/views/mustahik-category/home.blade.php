@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Mustahik Category</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mustahik Category</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <button href="" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0" data-toggle="modal" data-target="#exampleModal">Add Record</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col" style="width: 55%;">Description</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->category_name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->percentage }}%</td>
                            <td>Otto</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('mustahik-category.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
