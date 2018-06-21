@extends('layouts.master')
@section('title',$message->$title!=null?$message->$title:trans('home.not_available'))
@section('content')
  @if ($message->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($message->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $message->$description !!}</p>
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
      {{mb_substr(strip_tags($message->$description),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/decree/default_fb.jpg')}}
    @endslot

  @endcomponent

@endpush
