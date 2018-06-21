@extends('layouts.master')
@section('title',trans('menu.ocs'))
@section('content')

  <div class="ui items" style="">
    @if(sizeof($data)!=0)
      @foreach($data as $value)
        <div class="item {{($value==$data->last())?'no_border':''}}">
          <div class="content">
            <a href="{{url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->$title}}</a>
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
@endsection
@push('custom-css')
  <style>

  </style>

@endpush

@push('custom-js')
  <script>

  </script>

@endpush