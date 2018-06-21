@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
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
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
    .ui.fluid.card>.content img{
    max-width: 100%;
    }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
           <div class="ui fluid card not-printable" style="">
            <div class="ui breadcrumb" style="direction:{{$rtl}}">
              <a class="section">{{trans('menu.media')}}</a>
              <div class="divider"> / </div>
              <a class="section">{{trans('menu.news')}}</a>
            </div>
          </div>
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            @if($news_details->$title=='')
            <h2 class="ui header title_font">{{trans('home.content_not_available')}}</h2>
            @else
            <div class="content">
              <h2 class="ui header title_font border">{{$news_details->$title}}</h2>
              <img class="ui image" src="{{asset('uploads/news/'.$news_details->image)}}">
              <p class="meta body_font">{{$jdate->detailedDate($news_details->$date,$lang)}}</p>
              <div class="description">
                <p>{!!$news_details->$description!!}</p>
              </div>
              <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style not-printable">
              {{-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> --}}
              <!-- AddToAny BEGIN -->
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
              <a class="a2a_button_google_plus"></a>
              <a class="a2a_button_facebook_messenger"></a>
              <a class="a2a_button_telegram"></a>
              <a class="a2a_button_viber"></a>
              <a class="a2a_button_whatsapp"></a>
              <a class="a2a_button_line"></a>
              <a href="#" onclick="print()" style="background:lightgrey;padding-top: 5px;padding-bottom: 5px;border-radius: 3.2px;width: 32px;padding-right: 4px;"><i class="icon print"></i></a>
              <a class="a2a_button_email"></a>
              </div>
              <script>
              var a2a_config = a2a_config || {};
              a2a_config.prioritize = ["facebook", "twitter", "google_plus", "email", "print"];
              </script>
              <script async src="https://static.addtoany.com/menu/page.js"></script>
              <!-- AddToAny END -->
            </div>
            @endif
          </div>
          @if($final!=null && $news_details->$title!='')
          <div class="ui fluid card">
            <div class="content">
            <h3 class="title_font" style="direction:{{$rtl}};">{{trans('home.similar')}} </h3>
            <div class="ui three stackable cards" style="text-align:right;direction:{{$rtl}}">
              @foreach($final as $item)
                <div class="ui card">
                  <div class="content" style="direction:{{$rtl}};">
                    <div class="ui image" style="height: 103px;">
                      <img src="{{asset('uploads/news/'.$item->image)}}" style="height: 100%" alt="">
                    </div>
                    <a href="{{url($lang.'/news_details/'.$item->id)}}" class="title_font" style="direction: {{$rtl}} !important;">{{$item->$title}}</a>
                  </div>
                </div>
              @endforeach
            </div>

            </div>
          </div>
          @endif
        </div>


      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
