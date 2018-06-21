@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$desc = "desc_".$lang;
$img_thumb = "image_thumb_".$lang;
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
    height: 100%;
  }
  #bio a{
    height: 170px;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content" id="bio" style="text-align:right">
              <h2 class="ui header title_font border">{{trans('menu.infographics')}}</h2>
              @if (sizeof($info)!=0)
                <div class="ui three stackable cards" style="direction:{{$rtl}};">
                  @foreach($info as $value)
                    @php
                    if(sizeof($value->$title)==0)
                      continue;
                    @endphp
                    <div class="ui card">
                      <a class="image" href="{{url($lang.'/infographic_details',$value->id)}}">
                        <img src="{{asset('uploads/infographics/'.$lang.'/'.$value->$img_thumb)}}">
                      </a>
                      <div class="content">
                        <a href="{{url($lang.'/infographic_details',$value->id)}}">{{$value->$title}}</a>
                        <div class="meta">
                          {{-- <p class="ui label">{{$value->$date}}</p> --}}
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif

            </div>
             {{-- Pagination start --}}

          <div class="ui centered grid">
            {{$info->links()}}
          </div>
          {{-- Pagination End --}}
          </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
