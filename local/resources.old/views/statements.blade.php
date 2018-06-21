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
              <h2 class="ui header title_font border">{{trans('menu.statements')}}</h2>
              <div class="ui items" style="">

                @foreach($statements as $statement)
                  @php
                  if(sizeof($statement->$title)==0)
                    continue;
                  @endphp
                <div class="ui item {{($statement == $statements->last())?'no_border':''}}">
                  <div class="other_pages_thumbnail">
                    <img src="{{asset('uploads/statement/'.$statement->image)}}" style="padding-left:8px;height:100%;">
                  </div>
                  <div class="content">
                    <a href="{{url($lang.'/statement_details/'.$statement->id)}}" class="ui small header title_font">{{$statement->$title}}</a>
                    <div class="meta">
                      <span class="" dir="">{{$jdate->detailedDate($statement->$date,$lang)}}</span>
                    </div>
                    <div class=" description ">
                      <p class="body_font">{{$statement->$short_desc}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$statements->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
