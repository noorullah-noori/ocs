@extends('layouts.master')
@section('title',$news_details->$title!=null?$news_details->$title:trans('home.not_available'))
@section('content')
  @if ($news_details->$title!=null)
	<img class="ui image" src="{{asset('uploads/news/'.$news_details->image)}}">
    <p class="meta body_font" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($news_details->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $news_details->$description !!}</p>
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
      {{mb_substr(strip_tags($news_details->$description),255)}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/news/'.$news_details->image)}}
    @endslot

  @endcomponent

@endpush
