@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$pdf = 'pdf_'.$lang;
$url = 'url_'.$lang;
?>
  {{-- main content starts --}}
  <style>
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.items > .item {
    border-bottom: 1px dashed #ddd;
    padding-bottom: 10px;
    direction:{{$rtl}} !important;
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
  .ui.label.blue.header,.ui.yellow.label.meta {
    border:0;
    margin:0;
    border-radius: 0;
    box-shadow:0;
  }
  .ui.two.cards .content {
    padding:0;
    margin:0;
  }
  img {
    border-radius:0 !important;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.videos')}}</h2>
              <div class="ui two cards">
                @foreach($videos as $video)
                  @php
                  if(sizeof($video->$title)==0)
                    continue;
                  @endphp
                  <div class="ui card">
                    <div class="ui image" >
                      <a href="{{url($lang.'/video_details/'.$video->id)}}">
                      <img src="https://img.youtube.com/vi/{{$video->$url}}/hqdefault.jpg" alt="">
                      </a>
                    </div>
                    <div class="" style="background-color:#033B62 !important;padding:5px;border-radius: 0 !important;">
                      {{-- <div style=""> --}}
                      <a href="{{url($lang.'/video_details/'.$video->id)}}" class="ui inverted header title_font" style="font-size:16px !important;display: block;margin-bottom: 0px;">{{str_limit($video->$title,50)}}</a>
                      <span class="ui {{$indir}} floated inverted tiny header body_font" style="color:white !important;padding-top:5px;">{{$jdate->detailedDate($video->$date,$lang)}}</span>
                      {{-- </div> --}}

                    </div>
                  </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$videos->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
