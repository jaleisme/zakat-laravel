@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3 class="font-weight-bold">Payment</h3>
        </div>
        <div class="col-12 col-md-6">
        <a href="{{ route('payment.create') }}" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Muzakki</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Number of Person</th>
                            <th scope="col">Amil</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->payment_type_name }}</td>
                            @if($value->payment_type_name == "Rice" )
                            <td>{{ $value->amount }} Kg</td>
                            @else
                            <td>Rp.{{ $value->amount }}</td>
                            @endif
                            <td>{{ $value->number_of_person }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                <form method="POST" action="{{route('payment.destroy', $value->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                    <button type="submit" class="btn btn-danger delete-user mr-2"><img style="width: 18px;" src="{{ asset('/img/trash.svg') }}" alt=""></button>
                                        <a href="{{route('payment.edit', $value->id)}}" class="btn btn-info"><img style="width: 18px;" src="{{ asset('/img/edit.svg') }}" alt=""></a>
                                    </div>
                                </form>
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
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
