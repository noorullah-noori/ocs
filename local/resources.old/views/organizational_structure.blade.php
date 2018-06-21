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
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content" id="bio" style="text-align:right">
              <h2 class="ui header title_font border">{{trans('menu.organizational_structure')}}</h2>
              <center><p>{{trans('home.construction')}}</p></center>
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
