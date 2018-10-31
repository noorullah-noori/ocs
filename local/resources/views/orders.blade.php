@extends('layouts.master')
@section('title',trans('menu.orders'))
@section('content')
  @if ($orders)
    <div class="ui items">
      @foreach($orders as $order)
        <div class="ui item {{($order == $orders->last())?'no_border':''}}">
          <div class="ui small image">
            <img src="{{asset('uploads/order/default.jpg')}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{url($lang.'/order_details/'.$order->id)}}" class="ui small header title_font">{{$order->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($order->$date,$lang)}}</span>
            </div>
            <div class=" description ">
              <p class="body_font">{{$order->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$orders->links('vendor.pagination.default')}}
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>

  </style>

@endpush
