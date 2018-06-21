@extends('layouts.master')
@section('title',$info_details->$title!=null?$info_details->$title:trans('home.not_available'))
@section('content')
  @php
    $desc = "desc_".$lang;
    $img = 'image_'.$lang;
  @endphp
  @if (sizeof($info_details)!=0)
        <p class="meta body_font printable">{{$jdate->detailedDate($info_details->$date,$lang)}}</p>

        <div style="padding-bottom: 10px" class="printable">
          <a href="{{asset('uploads/infographics/'.$lang.'/'.$info_details->$img)}}" target="_blank">
          <img class="ui fluid image" src="{{asset('uploads/infographics/'.$lang.'/'.$info_details->$img)}}">
          </a>
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
      test
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/infographics/'.$lang.'/'.$info_details->$img)}}
    @endslot

  @endcomponent

@endpush
