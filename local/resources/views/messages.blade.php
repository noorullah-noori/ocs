@extends('layouts.master')
@section('title',trans('menu.messages'))
@section('content')
  @if (sizeof($messages)!=0)
    <div class="ui items">
      @foreach($messages as $message)
        <div class="ui item {{($message == $messages->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/message/'.$message->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/message_details/'.$message->id)}}" class="ui small header title_font">{{$message->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($message->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$message->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$messages->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
