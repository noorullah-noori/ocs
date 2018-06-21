
@if ($breadcrumbs)
  <div class="ui fluid card" style="">
    <div class="ui breadcrumb not-printable" style="direction:{{$rtl}}">
      @foreach ($breadcrumbs as $breadcrumb)
        @if (!$breadcrumb->last)
          <a class="section" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
          <div class="divider"> / </div>
        @else
          <a class="section">{{ $breadcrumb->title }}</a>
        @endif
      @endforeach
    </div>
  </div>
@endif
