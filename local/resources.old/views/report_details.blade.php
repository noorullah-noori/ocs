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
              <a class="section">{{trans('menu.reports')}}</a>
            </div>
          </div>
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content">
              @if (sizeof($report_details->$title)!=0)
              <h2 class="ui header title_font border">{{$report_details->$title}}</h2>
              <p class="meta body_font">{{$jdate->detailedDate($report_details->$date,$lang)}}</p>
              <div class="description">
                <p>{!!$report_details->$description!!}</p>
              </div>
              <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
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
                @else
                    <div class="ui huge label container not-printable">
                      <div class="ui icon image centered">
                        <img src="http://vignette1.wikia.nocookie.net/eastenders/images/f/f6/Under-construction.png/revision/latest?cb=20141120185311" alt="">
                      </div>
                      <div class="ui header container">
                        <h1 class="ui header centered">Under Construction</h1>
                      </div>
                    </div>
              @endif
              </div>
              <!-- AddToAny END -->
            </div>
          </div>

        </div>


      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
