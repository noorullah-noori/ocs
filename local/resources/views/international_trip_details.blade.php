@extends('layouts.master')
@section('title',$international_details->$title!=null?$international_details->$title:trans('home.not_available'))
@section('content')
  @if ($international_details->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($international_details->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $international_details->$description !!}</p>
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
      {{-- {{strip_tags($international_details->$description)}} --}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/international/'.$international_details->image_thumb)}}
    @endslot

  @endcomponent

@endpush
