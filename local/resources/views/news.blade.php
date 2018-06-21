@extends('layouts.master')
@section('title',trans('menu.news'))
@section('content')
  @if (sizeof($news_all)!=0)
    <div class="ui items">
      @foreach($news_all as $item)
        <div class="ui item {{($item == $news_all->last())?'no_border':''}}">
          <div class="other_pages_thumbnail">
            <img src="{{asset('uploads/news/'.$item->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/news_details/'.$item->id)}}" class="ui small header title_font">{{$item->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($item->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$item->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$news_all->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
