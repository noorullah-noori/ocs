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
  .ui.card .meta>a {
    direction: {{$rtl}};
    float: {{$dir}};
  }
  .image img {
    border: 0 !important;
    border-radius: 0 !important;
  }
  a.image {
    border: 5px solid #ddd !important;
    border-radius: 0 !important;
  }
  .ui.card > #album {
    padding-right: 0 !important;
    padding-left: 0 !important;

  }
  .inner_image{
    height: 140px;
  }
  .inner_image img{
    height: 100%;
    width: 100%;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.photo_albums')}}</h2>
              <div class="ui three stackable cards" style="direction:{{$rtl}}">
              @foreach($albums as $album)
                @php
                if(sizeof($album->$title)==0)
                  continue;
                @endphp
                <div class="ui card">
                  <a class="image" style="border: 5px solid #ddd !important;border-radius:0 !important;"href="{{url($lang.'/album_images',$album->id)}}">
                    <div class="ui bottom attached label body_font" style="text-align: center;">{{$jdate->detailedDate($album->$date,$lang)}}</div>
                    <div class="inner_image">
                    <img src="{{asset('uploads/album/'.$album->image)}}">
                    </div>
                  </a>
                  <div class="content" id="album">
                    <a class="ui  header" style="clear:both;" href="{{url($lang.'/album_images',$album->id)}}">{{$album->$title}}</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>

          {{-- Pagination start --}}

          <div class="ui centered grid">
            {{$albums->links()}}
          </div>
          {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
