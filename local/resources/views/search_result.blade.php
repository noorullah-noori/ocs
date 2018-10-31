@extends('layouts.master')
@section('title',trans('menu.ocs'))
{{-- @section('search_title', 'نتایج جستجو برای کلمه') --}}
@section('content')
@php
@endphp
  <div class="ui items" style="">
    @if($data)
      @foreach($data as $value)
        <div class="item {{($value==$data->last())?'no_border':''}}">
          <div class="content">
            <a href="{{($value->type=='word')?'#':url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{($value->type=='word')?trans('home.president_word'):$value->$title}}</a>
            <div class="meta body_font">
              {{$value->$date}}
              {{-- <span dir="">{{$jdate->detailedDate($value->date_en,$lang)}}</span> --}}
            </div>
            <div class=" description body_font ">
              <p class="body_font">{{$value->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <center><h2 style="">No match Found</h2></center>
    @endif
  </div>
    {{-- Pagination start --}}
      <div class="ui centered grid">
        {{$data->links()}}
      </div>
    {{-- Pagination End --}}
@endsection
@push('custom-css')
  <style>

  </style>

@endpush

@push('custom-js')
  <script>

  </script>

@endpush
