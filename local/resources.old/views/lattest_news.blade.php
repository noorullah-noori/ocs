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
              <h2 class="ui header title_font border">{{trans('home.latest_news')}}</h2>
              <div class="ui items" style="">
                  @if(sizeof($lattest_news)!=0)
                  @foreach($lattest_news as $item)
                    <?php 
                     $url =  ($item->table_name=='documents')?asset('uploads/documents_'.$lang.'/'.$item->table_id.'.pdf'):'';
                        // $img = '';
                       if($item->table_name=='documents'){
                          $extension = \File::extension($item->image_thumb);
                          if($extension=='xls' || $extension=='xlsx'){
                              $img = asset('assets/img/excel.png');
                          }
                          else if($extension=='doc'){
                           $img = asset('assets/img/doc.png'); 
                          }
                          else{
                            $img = asset('assets/img/pdf.png');
                          }
                        }
                        else if($item->table_name == 'videos'){
                          $img = "https://img.youtube.com/vi/$item->image_thumb/hqdefault.jpg";
                        }
                         else if($item->type == 'decree' || $item->type=='order'){
                            $img = asset('uploads/'.$item->type.'/default.jpg');
                        }
                        else{
                          $img = asset($item->image_thumb);
                        }
                  ?>
                      <div class="item {{($item==$lattest_news->last())?'no_border':''}}">
                        <div class="other_pages_thumbnail">
                          <img src="{{$img}}" style="padding-left:8px;">
                        </div>
                        <div class="content">
                          <a href="{{($item->table_name=='documents')?$url:url($lang.'/'.$item->type.'_details/'.$item->table_id)}}" class="ui small header title_font">{{$item->$title}}</a>
                          <div class="meta">
                            <span dir="">{{$jdate->detailedDate($item->$date,$lang)}}</span>
                          </div>
                          <div class=" description ">
                            <p class="body_font">{{$item->$short_desc}}</p>
                          </div>
                        </div>
                      </div>
                  @endforeach
                  @endif
              </div>
            </div>
             {{-- Pagination start --}}
                    <div class="ui centered grid">
                      {{$lattest_news->links()}}
                    </div>
               {{-- Pagination End --}}
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
