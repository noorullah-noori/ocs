@extends('layouts.master')
@section('title',trans('menu.presidential_palace'))
@section('content')
  @if ($palace!=null)
    <div class="description">
      <p  class="printable">{!! $palace->$description !!}</p>
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
      {{$palace!=null ? substr(strip_tags($palace->$description),720) : ''}}

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
