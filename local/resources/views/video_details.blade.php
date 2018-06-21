@extends('layouts.master')
@section('title',$video->$title!=null?$video->$title:trans('home.not_available'))
@section('content')
  @if ($video->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($video->$date,$lang)}}</p>
    <div class="description">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$video->$url}}" frameborder="0" allowfullscreen></iframe>
    </div>
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
@push('meta_tags')
  @component('include.components.meta_tags')

    @slot('meta_title')
      @yield('title')
    @endslot

    @slot('meta_description')
      @yield('title')
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      https://img.youtube.com/vi/{{$video->$url}}/hqdefault.jpg
    @endslot

  @endcomponent

@endpush
