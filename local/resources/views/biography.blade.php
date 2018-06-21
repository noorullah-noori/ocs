@extends('layouts.master')
@section('title',trans('menu.biography'))
@section('content')

  @php
    $bio = 'bio_'.$lang;
  @endphp

  @if ($biography->$bio!=null)
    <div class="description">
      <p  class="printable">{!! $biography->$bio !!}</p>
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
      {{mb_substr(strip_tags($biography->$bio),0,255,'utf-8')}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/decree/default_fb.jpg')}}
    @endslot

  @endcomponent

@endpush
