@if ($paginator->lastPage() > 1)
    <div class="ui tiny pagination menu" style="direction:">
        <a href="{{ $paginator->previousPageUrl() }}" class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} item">
            {{trans('home.prev')}}
        </a>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} item">
                {{ $i }}
            </a>
        @endfor
        <a href="{{ $paginator->nextPageUrl() }}" class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} item">
            {{trans('home.next')}}
        </a>
    </div>
@endif
