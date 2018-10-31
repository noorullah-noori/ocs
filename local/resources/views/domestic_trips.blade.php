@extends('layouts.master')
@section('title',trans('menu.domestic_trips'))
@section('content')
  @if ($domestic)
    <div class="ui items">
      @foreach($domestic as $value)
        <div class="ui item {{($value == $domestic->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/domestic/'.$value->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/domestic_details/'.$value->id)}}" class="ui small header title_font">{{$value->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($value->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$value->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$domestic->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
