@extends('layouts.master')
@section('title',trans('menu.photo_albums'))
@section('content')
  @if ($albums)
    <div class="ui three stackable cards" style="direction:{{$rtl}};">

      @foreach($albums as $album)
        <div class="ui card">
          <a class="image" href="{{url($lang.'/album_images',$album->id)}}">
            <img src="{{asset('uploads/album/'.$album->image)}}" alt="">
            <p class="ui bottom attached label body_font center aligned">
              {{$jdate->detailedDate($album->$date,$lang)}}
            </p>
          </a>
          <div class="content">
            <a class="ui header" href="{{url($lang.'/album_images',$album->id)}}">{{$album->$title}}</a>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$albums->links()}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>
  .image img {
    border-radius: 0px !important;
    border: 3px solid #ddd !important;
  }
  </style>

@endpush
