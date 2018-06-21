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
   ol li{
      direction: {{$rtl}};
      text-align: {{$dir}};
      margin-{{$dir}}:30px; 
    }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card not-printable" style="">
            <div class="ui breadcrumb" style="direction:{{$rtl}}">
              <a class="section">{{trans('menu.the_president')}}</a>
              <div class="divider"> / </div>
              <a class="section">{{trans('menu.orders')}}</a>
            </div>
          </div>
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            @if($order->$title=='')
            <h2 class="ui header title_font">{{trans('home.content_not_available')}}</h2>
            @else
            <div class="content">
              <h2 class="ui header title_font border">{{$order->$title}}</h2>
              <p class="meta">{{$jdate->detailedDate($order->$date,$lang)}}</p>
              <div>
                <p class="printable">
              <?php echo $order->$description; ?>
                </p>
              </div>
              <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style not-printable">
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
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
