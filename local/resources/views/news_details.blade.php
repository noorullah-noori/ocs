@extends('layouts.master')
@section('title',$news_details->$title!=null?$news_details->$title:trans('home.not_available'))
@section('content')
  @if ($news_details->$title!=null)
	<img class="ui image" src="{{asset('uploads/news/'.$news_details->image)}}">
    <p class="meta body_font" style="font-weight: bold;font-size: 1.1em;">{{$jdate->detailedDate($news_details->$date,$lang)}}</p>
    <div class="description">
      <p  class="printable">{!! $news_details->$description !!}</p>
    </div>
  @endif
   @if($final!=null && $news_details->$title!='')
          <div class="ui fluid card">
            <div class="content">
            <h3 class="title_font" style="direction:{{$rtl}};">{{trans('home.similar')}} </h3>
            <div class="ui three stackable cards" style="text-align:right;direction:{{$rtl}}">
              @foreach($final as $item)
                <div class="ui card">
                  <div class="content">
                    <div class="ui image" style="height: 103px;">
                      <img src="{{asset('uploads/news/'.$item->image)}}" style="height: 100%" alt="">
                    </div>
                    <a href="{{url($lang.'/news_details/'.$item->id)}}" class="title_font" style="direction: {{$rtl}} !important;">{{$item->$title}}</a>
                  </div>
                </div>
              @endforeach
            </div>

            </div>
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
      {{mb_substr(strip_tags($news_details->$description),255)}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{asset('uploads/news/'.$news_details->image)}}
    @endslot

  @endcomponent

@endpush
