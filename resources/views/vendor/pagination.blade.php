
@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous disabled"
                id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                                    data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
           {{-- <li class="disabled"><span>← Previous</span></li>--}}
        @else
            <li class="paginate_button page-item previous"
                id="DataTables_Table_0_previous"><a href="{{ $paginator->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                                                    data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
            {{--<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>--}}
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))

                <li class="disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                            <li class="paginate_button page-item previous active"
                                id="DataTables_Table_0_previous"><span aria-controls="DataTables_Table_0"
                                                                    data-dt-idx="0" tabindex="0"
                                                                    class="page-link">{{ $page }}</span></li>
                        {{--<li class="active my-active"><span>{{ $page }}</span></li>--}}
                    @else
                            <li class="paginate_button page-item previous deactive"
                                id="DataTables_Table_0_previous"><a href="{{ $url }}" aria-controls="DataTables_Table_0"
                                                                    data-dt-idx="0" tabindex="0"
                                                                    class="page-link">{{ $page }}</a></li>
{{--                        <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="{{ $paginator->nextPageUrl() }}"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="3"
                                                                                           tabindex="0"
                                                                                           class="page-link">Next</a>
           {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>--}}
        @else
                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="3"
                                                                                           tabindex="0"
                                                                                           class="page-link">Next</a>
           {{-- <li class="disabled"><span>Next →</span></li>--}}
        @endif
    </ul>
@endif
