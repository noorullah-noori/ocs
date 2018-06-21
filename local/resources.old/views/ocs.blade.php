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
    direction:{{$rtl}} !important;
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
  #ocs img{
    width: 100%;
    height: auto;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}
    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <div class="ui items" id="ocs" style="width:100%;">
                <h2 class="ui header title_font border">{{trans('menu.ocs')}}</h2>
                @if (sizeof($ocs)!=0)
                  {!! $ocs->$description !!}

                 <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="float:{{$indir}}">
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
              <!-- AddToAny END -->
              @endif
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
