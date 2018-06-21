@extends('layouts.master')
@section('title',$domestic_trip->$title!=null?$domestic_trip->$title:trans('home.not_available'))
@section('content')
  @if ($domestic_trip->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($domestic_trip->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $domestic_trip->$description !!}</p>
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
      {{mb_substr(strip_tags($domestic_trip->$description),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/decree/'.$domestic_trip->image)}}
    @endslot

  @endcomponent

@endpush
