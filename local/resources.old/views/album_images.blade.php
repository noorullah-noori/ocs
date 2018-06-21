@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
?>
<link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">
  {{-- main content starts --}}
  <style>
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.card .meta>a {
    direction: {{$rtl}};
    float: {{$dir}};
  }
  .ui.card > #album {
    padding-right: 0 !important;
    padding-left: 0 !important;

  }
  .example-image{
    /*border: 1px solid #ddd;*/
    height: 155px !important;
  }
  /*.card img{
    height: 112px !important;
    border: 0;
    border-radius: 0 !important;
  }*/
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
    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        {{-- page content --}}
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.image')}}</h2>
              <div class="ui three doubling stackable cards">
                @foreach($images as $image)
                <div class="ui card">
                  <a href="{{asset('uploads/albumImage/'.$image->image)}}" class="image example-image-link" data-lightbox="test" data-title="{{$image->$title}}">
                    <img class="example-image" src="{{asset('uploads/albumImage/'.$image->image)}}">
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

@include('include.footer')
<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
<script>


</script>
