@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Payment Type</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payment Type</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="/tambahdatapymenttype" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 80%;">Payment Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->payment_type_name }}</td>
                            <td>
                                <a onclick="confirmDelete('/deletedatapymenttype/{{ $value->id }}')" class="btn btn-danger text-white">Delete</a>
                                <a href="/tampildatapymenttype/{{ $value->id }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    function confirmDelete(url){
        var ask = window.confirm("Are you sure you want to delete this record?");
        if (ask) {
            window.alert("This post was successfully deleted.");
            window.location.href = url;

        }
    }
</script>
@endsection
