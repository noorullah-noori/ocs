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
// if search session exists highlight the keyword
  var search_keyword = "{{Session::get('search_keyword') ? Session::get('search_keyword') : 0 }}";
  if(search_keyword) {
    var src_str = $(".sixteen.wide.tablet.mobile.eleven.wide.computer.column").html();
    var term = search_keyword;
    term = term.replace(/(\s+)/,"(<[^>]+>)*$1(<[^>]+>)*");
    var pattern = new RegExp("("+term+")", "gi");

    src_str = src_str.replace(pattern, "<mark>$1</mark>");
    src_str = src_str.replace(/(<mark>[^<>]*)((<[^>]+>)+)([^<>]*<\/mark>)/,"$1</mark>$2<mark>$4");

    $(".sixteen.wide.tablet.mobile.eleven.wide.computer.column").html(src_str);
  }


  </script>

@endpush
