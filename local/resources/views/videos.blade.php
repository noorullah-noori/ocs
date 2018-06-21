@extends('layouts.master')
@section('title',trans('menu.videos'))
@section('content')
  @if (sizeof($videos)!=0)
    <div class="ui two stackable cards" style="direction:{{$rtl}};">

      @foreach($videos as $video)
        <div class="ui card">
          <a class="image" href="{{url($lang.'/video_details',$video->id)}}">
            <img src="https://img.youtube.com/vi/{{$video->$url}}/hqdefault.jpg" alt="">
            <div class="ui bottom attached label body_font left aligned inverted" style="background:#033B62;">
              <h4 class="inverted header" style="margin:0;">
                {{$video->$title}}
              </h4>
              <span style="color:#fff !important;font-size:1.1em;">
                {{$jdate->detailedDate($video->$date,$lang)}}
              </span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$videos->links()}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>
  .image img {
    border-radius: 0px !important;
  }
  h4.inverted.header {
    margin: 0;
    width: 300px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }
  </style>

@endpush
