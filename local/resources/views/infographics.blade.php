@extends('layouts.master')
@section('title',trans('menu.infographics'))
@section('content')
  @php
    $desc = "desc_".$lang;
    $img_thumb = "image_thumb_".$lang;
  @endphp
  @if ($info)
    <div class="ui three stackable cards infographics" style="direction:{{$rtl}};">
      @foreach($info as $value)
        @php
        if(!$value->$title)
          continue;
        @endphp
        <div class="ui card">
          <a class="image" href="{{url($lang.'/infographic_details',$value->id)}}">
            <img src="{{asset('uploads/infographics/'.$lang.'/'.$value->$img_thumb)}}">
          </a>
          <div class="content">
            <a href="{{url($lang.'/infographic_details',$value->id)}}">{{$value->$title}}</a>
            <div class="meta">
            </div>
          </div>
        </div>
      @endforeach
    </div>
     {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$info->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>
   .infographics .ui.card a.image{
        height: 170px !important;
        overflow: hidden;
        /*width: 100% !important;*/
   }
   .infographics .ui.card img{
    height: 170px !important;
   }
  </style>

@endpush
