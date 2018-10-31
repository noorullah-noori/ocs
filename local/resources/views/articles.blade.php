@extends('layouts.master')
@section('title',trans('menu.articles'))
@section('content')
  @if ($articles)
    <div class="ui items">
      @foreach($articles as $item)
        <div class="ui item {{($item == $articles->last())?'no_border':''}}">
          <div class="other_pages thumbnail">
            <img src="{{asset('uploads/article/'.$item->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/article_details/'.$item->id)}}" class="ui small header title_font">{{$item->$title}}</a>
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
      {{$articles->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
