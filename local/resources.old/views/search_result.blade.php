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
              <h2 class="ui header title_font border">Search Result</h2>
              <div class="ui items" style="">
                @if(sizeof($data_en)!=0)
                  @foreach($data_en as $value)
                    <div class="item {{($value==$data_en->last())?'no_border':''}}">
                      <div class="content">
                        <a href="{{url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->title_en}}</a>
                        <div class="meta body_font">
                          {{$value->date_en}}
                          {{-- <span dir="">{{$jdate->detailedDate($value->date_en,$lang)}}</span> --}}
                        </div>
                        <div class=" description body_font ">
                          <p class="body_font">{{$value->short_desc_en}}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach

                @elseif(sizeof($data_pa)!=0)

                   @foreach($data_pa as $value)
                      <div class="item {{($value==$data_pa->last())?'no_border':''}}">
                        <div class="content">
                          <a href="{{url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->title_pa}}</a>
                          <div class="meta body_font">
                            {{$value->date_pa}}
                            {{-- <span dir="">{{$jdate->detailedDate($value->date_pa,$lang)}}</span> --}}
                          </div>
                          <div class=" description body_font ">
                            <p class="body_font">{{$value->short_desc_pa}}</p>
                          </div>
                        </div>
                      </div>
                    @endforeach



                @elseif(sizeof($data_dr)!=0)
                  @foreach($data_dr as $value)
                    <div class="item {{($value==$data_dr->last())?'no_border':''}}">
                      <div class="content">
                        <a href="{{url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->title_dr}}</a>
                        <div class="meta body_font">
                          {{$value->date_dr}}
                          {{-- <span dir="">{{$jdate->detailedDate($value->date_dr,$lang)}}</span> --}}
                        </div>
                        <div class=" description body_font ">
                          <p class="body_font">{{$value->short_desc_dr}}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  <center><h2 style="">No match Found</h2></center>
                @endif
              </div>
            </div>
           {{-- Pagination start --}}
                <div class="ui centered grid">

                </div>
           {{-- Pagination End --}}

          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
