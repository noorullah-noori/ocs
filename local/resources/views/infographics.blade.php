@extends('layouts.master')
@section('title',trans('menu.infographics'))
@section('content')
  @php
    $desc = "desc_".$lang;
    $img_thumb = "image_thumb_".$lang;
  @endphp
  @if (sizeof($info)!=0)
    <div class="ui three stackable cards" style="direction:{{$rtl}};">
      @foreach($info as $value)
        @php
        if(sizeof($value->$title)==0)
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
  @endif
@endsection
@push('custom-css')
  <style>
    #bio img{
      height: 100%;
    }
    #bio a{
      height: 170px;
    }
  </style>

@endpush
