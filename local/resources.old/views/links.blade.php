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
              <h2 class="ui header title_font border">{{trans('menu.links')}}</h2>
              <div class="ui items" style="width:100%;">
                @foreach($links as $item)
                  @php
                  if(sizeof($item->$title)==0)
                    continue;
                  @endphp
                  <div class="ui item {{($item==$links->last())?'no_border':''}}">
                    <a href="{{url($lang.'/link_details',$item->id)}}">
                      <div class="other_pages_thumbnail">
                        <img src="{{url('uploads/links/'.$item->image)}}" alt="" style="">
                      </div>
                    </a>
                    <div class="content">
                      <a href="{{url($lang.'/link_details',$item->id)}}" class="ui header title_font">{{$item->$title}}</a>
                      <div class="description body_font">{{str_limit(strip_tags($item->$description),200)}}</div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$links->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
