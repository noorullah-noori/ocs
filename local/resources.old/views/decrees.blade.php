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
  </style>
    {{-- left sidebar president word and social boxes start --}}
    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.decrees')}}</h2>
              <div class="ui items">
                @foreach($decrees as $decree)
                  @php
                  if($decree->$title=='')
                    continue;
                  @endphp
                <div class="ui item {{($decree == $decrees->last())?'no_border':''}}">
                  <div class="ui small image">
                    <img src="{{asset('uploads/decree/default.jpg')}}" style="padding-left:8px;">
                  </div>
                  <div class="content">
                    <a href="{{url($lang.'/decree_details/'.$decree->id)}}" class="ui small header title_font">{{$decree->$title}}</a>
                    <div class="meta">
                      <span class="body_font" dir="">{{$jdate->detailedDate($decree->$date,$lang)}}</span>
                    </div>
                    <div class=" description ">
                      <p class="body_font">{{$decree->$short_desc}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$decrees->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
