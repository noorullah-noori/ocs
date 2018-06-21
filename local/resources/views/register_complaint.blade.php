@extends('layouts.master')
@section('title',trans('menu.complaint_regestration'))
@section('content')
  <h3 class="ui header title_font">{!!trans('home.complaint_header')!!}</h3>
  <p>{!! trans('home.complaint_p1')!!}</p>
  <p>{!! trans('home.complaint_p2')!!}</p>
  <p>{!! trans('home.complaint_p3') !!}</p>
  <p>{!! trans('home.complaint_p4') !!}</p>
  <p>{!! trans('home.complaint_p5') !!}</p>
  <p>{!! trans('home.complaint_p6') !!}</p>

  <div class="ui item">
    <div class="ui tiny image icon" style="float:{{$dir}};height:100%;padding-{{$indir}}:5px;">
      <a target="_blank" href="{{asset('assets/complaint_reg/complaint_doc.doc')}}">
        <img src="{{asset('assets/img/doc.png')}}">
      </a>
    </div>

    <div class="content" style="display:block;">
        <p style="margin-bottom: 0;">{!! trans('home.complaint_p7')  !!}</p>
        <p style="display: flex;">{!! trans('home.complaint_p8')  !!}</p>
    </div>
  </div>

  <div class="ui small centered header" style="clear: both;">
    <a href="{{asset('assets/complaint_reg/complaint_report_'.$lang.'.pdf')}}" target="_blank" class="">{!!  trans('home.complaint_report') !!}</a>
  </div>
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
      {!! trans('home.complaint_p1')!!}
      {!! trans('home.complaint_p2')!!}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{-- http://localhost/ocs_live/uploads/decree/default_fb.jpg --}}
      {{asset('uploads/decree/default_fb.jpg')}}
      {{-- {{asset('uploads/news/'.$ocs->image_thumb)}} --}}
    @endslot

  @endcomponent

@endpush
