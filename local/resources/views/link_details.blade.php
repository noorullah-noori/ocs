@extends('layouts.master')
@section('title',$link_details->$title!=null?$link_details->$title:trans('home.not_available'))
@section('content')
  @if ($link_details->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($link_details->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $link_details->$description !!}</p>
    </div>
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
@push('meta_tags')
  @component('include.components.meta_tags')

    @slot('meta_title')
      @yield('title')
    @endslot

    @slot('meta_description')
      {{mb_substr(strip_tags($link_details->$description),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/links/'.$link_details->image)}}
      {{-- {{asset('uploads/news/'.$link_details->image_thumb)}} --}}
    @endslot

  @endcomponent

@endpush
