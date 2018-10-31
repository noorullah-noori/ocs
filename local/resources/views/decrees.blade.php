@extends('layouts.master')
@section('title',trans('menu.decrees'))
@section('content')
  @if ($decrees)
    <div class="ui items">
      @foreach($decrees as $decree)
        <div class="ui item {{($decree == $decrees->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/decree/default.jpg')}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/decree_details/'.$decree->id)}}" class="ui small header title_font">{{$decree->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($decree->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$decree->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$decrees->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
