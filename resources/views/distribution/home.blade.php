@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3 class="font-weight-bold">Distribution</h3>
        </div>
        <div class="col-12 col-md-6">
        <a href="{{ route('distribution.create') }}" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
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
                        @forelse($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->fullname }}</td>
                            <td>Rp.{{ $value->amount_money }}</td>
                            <td>{{ $value->amount_rice }} Kg</td>
                            <td>{{ $value->notes }}</td>
                            <td>{{ $value->distributed_at }}</td>
                            <td>
                                @if($value->status === 0)
                                    <div class="badge badge-secondary">Not Delivered</div>
                                @elseif($value->status === 1)
                                    <div class="badge badge-success">Delivered</div>
                                @elseif($value->status === 2)
                                    <div class="badge badge-warning">Pending</div>
                                @elseif($value->status === 3)
                                    <div class="badge badge-danger">Cancelled</div>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{route('distribution.destroy', $value->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger delete-user mr-2"><img style="width: 18px;" src="{{ asset('/img/trash.svg') }}" alt=""></button>
                                        <a href="{{route('distribution.edit', $value->id)}}" class="btn btn-info"><img style="width: 18px;" src="{{ asset('/img/edit.svg') }}" alt=""></a>
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
