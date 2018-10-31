@extends('layouts.master')
@section('title',trans('menu.statements'))
@section('content')
  @if ($statements)
    <div class="ui items">
      @foreach($statements as $statement)
        <div class="ui item {{($statement == $statements->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/statement/'.$statement->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/statement_details/'.$statement->id)}}" class="ui small header title_font">{{$statement->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($statement->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$statement->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$statements->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
