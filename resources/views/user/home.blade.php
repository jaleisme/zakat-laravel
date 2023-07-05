@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3 class="font-weight-bold">Users</h3>
        </div>
        <div class="col-12 col-md-6">
        <a href="{{ route('users.create') }}" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <a href="{{route('users.edit', $value->id)}}" class="btn btn-info"><img style="width: 18px;" src="{{ asset('/img/edit.svg') }}" alt=""></a>
                            </td>
                        </tr>
                        @empty
                        <span>There's nothing here.</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            {!! $data->links('layouts.pagination') !!}
        </div>
    </div>
</div>
@endsection


@section('custom-js')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
@endsection
