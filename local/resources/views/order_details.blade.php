@extends('layouts.master')
@section('title',$order->$title!=null?$order->$title:trans('home.not_available'))
@section('content')
  @if ($order->$title!=null)
    <p class="meta" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($order->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $order->$description !!}</p>
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
      {{mb_substr(strip_tags($order->$description),0,255,'utf-8')}}
    @endslot
     @slot('meta_url')
      {{Request::url()}}
    @endslot
     @slot('meta_image')
     {{-- http://ocs.gov.af/uploads/statement/334_t.jpg --}}
      {{-- {{asset('uploads/order/'.$order->image_thumb)}} --}}
    @endslot
   @endcomponent
 @endpush