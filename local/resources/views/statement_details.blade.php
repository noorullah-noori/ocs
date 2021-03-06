@extends('layouts.master')
@section('title',$statement->$title!=null?$statement->$title:trans('home.not_available'))
@section('content')
  @if ($statement->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($statement->$date,$lang)}}</p>
{{-- <img src="{{$statement->image_thumb}}"> --}}
    <div class="description">
      <p  class="printable">{!! $statement->$description !!}</p>
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
      {{mb_substr(strip_tags($statement->$description),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/statement/'.$statement->image_thumb)}}
    @endslot

  @endcomponent

@endpush
