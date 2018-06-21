@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$bio = "bio_".$lang;
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
 /* #bio img{
    width: 100%;
    height: auto;
  }*/
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="ui breadcrumb" style="direction:{{$rtl}}">
              <a class="section">{{trans('menu.the_president')}}</a>
              <div class="divider"> / </div>
              <a class="section">{{trans('menu.biography')}}</a>
            </div>
          </div>
          <div class="ui fluid card" style="">
            <div class="content" id="bio" style="text-align:right">
              <h2 class="ui header title_font border">{{trans('menu.biography')}}</h2>
              @if (sizeof($biography)!=0)
                {!! $biography->$bio !!}
              @endif
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
