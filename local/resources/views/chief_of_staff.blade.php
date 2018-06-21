@extends('layouts.master')
@section('title',trans('menu.chief_of_staff'))
@section('content')
  @if ($cos!=null)
    <div class="description">
      <p  class="printable">{!! $cos->$description !!}</p>
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
      {{$cos!=null ? substr(strip_tags($cos->$description),720) : ''}}

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
