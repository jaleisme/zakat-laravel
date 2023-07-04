
@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="page-item btn btn-primary text-white"><span>←</span></li>
        @else
            <li class="page-item btn btn-light-primary"><a class="text-success text-decoration-none" href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="page-item btn btn-primary text-white"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item btn btn-primary text-white"><span>{{ $page }}</span></li>
                    @else
                        <li class="page-item btn btn-light-primary"><a class="text-success text-decoration-none" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li class="page-item btn btn-light-primary"><a class="text-success text-decoration-none" href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li>
        @else
            <li class="page-item btn btn-primary text-white"><span>→</span></li>
        @endif
    </ul>
@endif
