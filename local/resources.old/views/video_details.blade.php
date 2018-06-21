@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$url,$jdate;
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
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content">
              <h2 class="ui header title_font border">{{$video->$title}}</h2>
              <p class=" meta" style="padding-right:5px;">{{$jdate->detailedDate($video->$date,$lang)}}</p>
              <div>
               <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$video->$url}}" frameborder="0" allowfullscreen></iframe>
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
                <a class="a2a_button_email"></a>
              </div>
              <!-- AddToAny END -->
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
