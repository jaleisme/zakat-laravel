@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3 class="font-weight-bold">Distribution</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 bg-white">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Distribution</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-6">
        <a href="{{ route('distribution.create') }}" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">#</th>
                            <th scope="col">Mustahik</th>
                            <th scope="col">Money</th>
                            <th scope="col">Rice</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Distributed At</th>
                            <th scope="col">Status</th>
                            <th scope="col" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->amount_money }}</td>
                            <td>{{ $value->amount_rice }}</td>
                            <td>{{ $value->notes }}</td>
                            <td>{{ $value->distributed_at }}</td>
                            <td>{{ $value->status }}</td>
                            <td>
                                <form method="POST" action="{{route('distribution.destroy', $value->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                        <a href="{{route('distribution.edit', $value->id)}}" class="btn btn-warning">Edit</a>
                                    </div>
                                </form>
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
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
