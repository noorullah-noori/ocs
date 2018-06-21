@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$desc = "desc_".$lang;
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
  #bio img{
    width: 100%;
    height: 600px;
  }
  p {
    font-size:15px !important;
    font-weight: normal;
  }
  input,textarea,button {
    border-radius: 0 !important;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <h2 class="ui header title_font border">{{trans('menu.complaint_regestration')}}</h2>
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content" id="" style="text-align:right">
              <h3 class="ui header title_font">{!!trans('home.complaint_header')!!}</p>
              <p>{!! trans('home.complaint_p1')!!}</p>
              <p>{!! trans('home.complaint_p2')!!}</p>
              <p>{!! trans('home.complaint_p3') !!}</p>
              <p>{!! trans('home.complaint_p4') !!}</p>
              <p>{!! trans('home.complaint_p5') !!}</p>
              <p>{!! trans('home.complaint_p6') !!}</p>

              <div class="ui item">
                <div class="ui tiny image icon" style="float:{{$dir}};height:100%;padding-{{$indir}}:5px;">
                  <a target="_blank" href="{{asset('assets/complaint_reg/complaint_doc.doc')}}">
                    <img src="{{asset('assets/img/pdf.png')}}">
                  </a>
                </div>
                {{-- <div class="ui icon image" style="float:{{$dir}};height: 100%;">

                  <a href="{{asset('assets/complaint_reg/complaint_doc.doc')}}" target="_blank"><i class="icon huge file pdf outline"></i></a>
                </div> --}}

                <div class="content" style="display:block;">
                    <p style="margin-bottom: 0;">{!! trans('home.complaint_p7')  !!}</p>
                    <p style="display: flex;">{!! trans('home.complaint_p8')  !!}</p>
                </div>
              </div>

              <div class="ui small centered header" style="clear: both;">
                <a href="{{asset('assets/complaint_reg/complaint_report_'.$lang.'.pdf')}}" target="_blank" class="">{!!  trans('home.complaint_report') !!}</a>
              </div>

              <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="float: {{$indir}};">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_facebook_messenger"></a>
                <a class="a2a_button_telegram"></a>
                <a class="a2a_button_viber"></a>
                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_line"></a>
                <a class="a2a_button_print"></a>
                <a class="a2a_button_email"></a>
              </div>
              <script>
                var a2a_config = a2a_config || {};
                a2a_config.prioritize = ["facebook", "twitter", "google_plus", "email", "print"];
              </script>
              <script async src="https://static.addtoany.com/menu/page.js"></script>
              <!-- AddToAny END -->
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
