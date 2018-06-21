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
    direction:{{$ltr}};
    float: {{$dir}};
    text-align: {{$dir}};
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.messages')}}</h2>
              <div class="ui items" style="">
                 @foreach($messages as $message)
                   @php
                   if(sizeof($message->$title)==0)
                     continue;
                   @endphp
                <div class="ui item {{($message == $messages->last())?'no_border':''}}">
                  <div class="other_pages_thumbnail">
                    <img class="" src="{{asset('uploads/message/'.$message->image)}}" style="padding-left:8px;">
                  </div>
                  <div class="content">
                    <a href="{{url($lang.'/message_details/'.$message->id)}}" class="ui small header title_font">{{$message->$title}}</a>
                    <div class="meta">
                      <span class="" dir="">{{$jdate->detailedDate($message->$date,$lang)}}</span>
                    </div>
                    <div class=" description ">
                      <p class="body_font">{{$message->$short_desc}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$messages->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
