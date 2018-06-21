@extends('layouts.master')
@section('title',trans('menu.words'))
@section('content')
  @if (sizeof($words_all)!=0)
    <div class="ui items">
      @foreach($words_all as $word)
        <div class="ui item {{($word == $words_all->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/word/'.$word->image_thumb)}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <div class=" description ">
              <p class="body_font">{{$word->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$words_all->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
