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
    margin-top:0;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.words')}}</h2>
              <div class="ui items" style="">
                 <?php $i=0; ?>
                 @foreach($words_all as $word)
                 @php
                 if(sizeof($word->$short_desc)==0) {
                   continue;
                 }
                 $i +=1;
                 @endphp
                <div class="ui item {{($word == $words_all->last())?'no_border':''}}">
                  <div class="other_pages_thumbnail">
                    <img src="{{asset('uploads/word/'.$word->image)}}" style="padding-left:8px;">
                  </div>
                  <div class="content">
                    <div class=" description">
                      <p class="body_font">{{$word->$short_desc}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @if($i>0)
            <div class="ui centered grid">
              {{$words_all->links()}}
            </div>
            @endif
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
