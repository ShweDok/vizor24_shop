@if(is_object($instances) and method_exists($instances,'hasPages') and $instances->hasPages())
    <nav class="mb-3" aria-label="">
        @php($links_count = (int)config('backend.pagination.links_count'))

        @php($backward = $instances->currentPage() - 1)
        @php($forward = $instances->lastPage()-$instances->currentPage())
        @php($c2b = (($links_count*2) - $backward))
        @php($c2f = (($links_count*2) - $forward))
        @php($c2bcc = (($c2b < $links_count) ? $links_count : $c2b))
        @php($c2fcc = (($c2f < $links_count) ? $links_count : $c2f))
        @php($count__visible_forward = ($c2bcc > $forward) ? $forward : $c2bcc )
        @php($count__visible_backward = ($c2fcc > $backward) ? $backward : $c2fcc)

        <ul class="pagination pagination-sm justify-content-start mb-0">

            @if(!$instances->onFirstPage())
                <li class="page-item">
                    <a class="page-link page-link-enabled" href="{{$instances->url(($instances->currentPage() - 1))}}" data-page="{{($instances->currentPage() - 1)}}" tabindex="-1" aria-label="Назад">
                        Назад
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link text-gray" href="javascript:void(0)">Назад</a>
                </li>
            @endif

            @if ($backward > $count__visible_backward)
                <li class="page-item">
                    <a class="page-link page-link-enabled" href="{{$instances->url($instances->currentPage() - ($count__visible_backward + 1))}}" data-page="{{$instances->currentPage() - ($count__visible_backward + 1)}}">...</a>
                </li>
            @endif

            @foreach(range(1,$instances->lastPage()) as $page)

                @if ((($instances->currentPage() - $page <= $count__visible_backward) and ($instances->currentPage() - $page >= -$count__visible_forward)))
                    <li class="page-item {{$instances->currentPage() == $page ? 'active' : ''}}">
                        <a class="page-link page-link-enabled" href="{{$instances->url($page)}}" data-page="{{$page}}">
                            {{$page}}
                        </a>
                    </li>
                @endif

            @endforeach

            @if ($forward > $count__visible_forward)
                <li class="page-item">
                    <a class="page-link page-link-enabled" href="{{$instances->url($instances->currentPage() + ($count__visible_forward + 1))}}" data-page="{{$instances->currentPage() + ($count__visible_forward + 1)}}">...</a>
                </li>
            @endif

            @if($instances->hasMorePages())
                <li class="page-item">
                    <a class="page-link page-link-enabled" href="{{$instances->url(($instances->currentPage() + 1))}}" data-page="{{($instances->currentPage() + 1)}}" aria-label="Далее">
                        Далее
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link text-gray" href="javascript:void(0)">Далее</a>
                </li>
            @endif

        </ul>
    </nav>
@endif