@extends('layouts.master')
@section('title',trans('menu.links'))
@section('content')
  @if (sizeof($links)!=0)
    <div class="ui items">
      @foreach($links as $item)
        <div class="ui item {{($item == $links->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/links/'.$item->image)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/link_details/'.$item->id)}}" class="ui small header title_font">{{$item->$title}}</a>
            {{-- <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($item->$date,$lang)}}</span>
            </div> --}}
            <div class=" description ">
              <p class="body_font">{{str_limit(strip_tags($item->$description),200)}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$links->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>
  .ui.items>.item>.image {
    padding: 0 !important;
  }
  </style>

@endpush
