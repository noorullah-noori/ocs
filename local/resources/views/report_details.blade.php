@extends('layouts.master')
@section('title',$report_details->$title!=null?$report_details->$title:trans('home.not_available'))
@section('content')
  @if ($report_details->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($report_details->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $report_details->$description !!}</p>
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
      {{mb_substr(strip_tags($report_details->$description),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/news/'.$report_details->image_thumb)}}
    @endslot

  @endcomponent

@endpush
