@extends('layouts.master')
@section('title',$album->$title)
@section('content')
  @if ($images)
    <div class="ui three doubling stackable cards" style="direction:{{$rtl}};">

      @foreach($images as $image)
        <div class="ui card">
          <a href="{{asset('uploads/albumImage/'.$image->image)}}" class="image example-image-link" data-lightbox="test" data-title="{{$image->$title}}">
            <img class="example-image" src="{{asset('uploads/albumImage/'.$image->image)}}" alt="">
          </a>
        </div>
      @endforeach
    </div>
    {{-- Pagination start --}}
    <div class="ui centered grid">
    </div>
    {{-- Pagination End --}}
  @endif
@endsection
@push('custom-css')
  <style>
  .image img {
    border-radius: 0px !important;
    border: 3px solid #ddd !important;
  }
   .card {
    border: 5px solid #cecece !important;
    border-radius:0 !important;
    box-shadow: none !important;
  }
  .lb-data .lb-details{
    text-align: {{$dir}} !important;
    direction: {{$rtl}} !important;
  }
  .lb-data .lb-number{
    float: {{$indir}} !important;
  }
  </style>

@endpush
@push('custom-css-links')
  <link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">
@endpush
@push('custom-js-links')
  <script src="{{asset('assets/js/lightbox.min.js')}}"></script>


@endpush
