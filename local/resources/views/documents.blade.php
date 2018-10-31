@extends('layouts.master')
@section('title',trans('menu.reports_and_documents'))
@section('content')
  @php
    $documents_path = 'documents_'.$lang;
    $pdf = 'pdf_'.$lang;
  @endphp
  @if ($documents)
    <div class="ui items">
      @foreach($documents as $item)
        <div class="ui item {{($item == $documents->last())?'no_border':''}}">
          <div class="ui tiny image icon" style="">
            <img src="{{asset('assets/img/pdf.png')}}" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="{{asset('uploads/'.$documents_path.'/'.$item->$pdf)}}" class="ui small header title_font">{{$item->$title}}</a>
            <div class="meta">
              <span class="body_font" dir="">{{$jdate->detailedDate($item->$date,$lang)}}</span>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
      {{$documents->links('vendor.pagination.default')}}
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
