@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3 class="font-weight-bold">Mustahik Category</h3>
        </div>
        <div class="col-12 col-md-6">
        <a href="{{ route('mustahik-category.create') }}" class="btn btn-primary d-block d-md-inline-block float-md-right mt-3 mb-5 my-md-0">Add Record</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col" style="width: 55%;">Description</th>
                            <!-- <th scope="col">Percentage (used: {{$usedPercentage}}%)</th> -->
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $n => $value)
                        <tr>
                            <th scope="row">{{ $n+1 }}</th>
                            <td>{{ $value->category_name }}</td>
                            <td>{{ $value->description }}</td>
                            <!-- <td>{{ $value->percentage }}%</td> -->
                            <td>
                                <form method="POST" action="{{route('mustahik-category.destroy', $value->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                    <button type="submit" class="btn btn-danger delete-user mr-2"><img style="width: 18px;" src="{{ asset('/img/trash.svg') }}" alt=""></button>
                                        <a href="{{route('mustahik-category.edit', $value->id)}}" class="btn btn-info"><img style="width: 18px;" src="{{ asset('/img/edit.svg') }}" alt=""></a>
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
