@include('include.home_header')
@php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$url,$jdate;
$pdf = 'pdf_'.$lang;
$icon = '';
@endphp
<style>
.ui.fluid.card {
  border:0 !important;
}
.ui.centered.container.grid {
  padding:0 !important;
}
#carousel_div {
  position: relative;
}

</style>

  {{-- main content starts --}}
    {{-- carousel starts --}}
    <div class="ui stackable segment masthead" style="background-color:#dfdfdf;margin-top:0;padding-bottom:0;">
      <div class="owl-carousel" style="">
        @if(sizeof($news)!=0)
          @foreach($news as $value)
            @if($value->$title!=null)
              <div class="item">
                <div class="ui stackable container grid" id="carousel_div">
                  <div class="sixteen wide mobile tablet ten wide computer column" id="carousel_image_div" >
                    <div class="carousel_thumbnail">
                      <img style="" src="{{asset('uploads/news/'.$value->image)}}" alt="">
                    </div>
                  </div>
                  <div class="sixteen wide mobile tablet six wide computer column" id="carousel_text_div" style="">
                    <blockquote style="">
                      <a href="{{url($lang.'/news_details/'.$value->id)}}" class="ui header title_font news_title" id="carousel_title" style="display:block;margin-bottom:{{(strlen($value->$short_desc)<200)?'10px':'2px'}} !important">{{$value->$title}}</a>
                      <p class="body_font " style="color:#888;font-size:14px;margin-bottom: 5px;" dir=""><i class="icon time"></i>
                        {{$jdate->detailedDate($value->$date,$lang)}}</p>
                      <div style="font-size:17px;" class="body_font carousel_text">{{$value->$short_desc}}</div>
                      <a class="body_font" href="{{url($lang.'/news_details/'.$value->id)}}" style="color:#888;font-size:14px;float:{{$indir}}">{{trans('home.read_more')}}</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        @else
          <div class="item">
            <div class="ui stackable container grid" id="carousel_div">
              <div class="sixteen wide mobile tablet ten wide computer column" id="carousel_image_div">
                <div class="carousel_thumbnail">
                  {{-- <h1 class="ui header">Please Enter Data from CMS</h1> --}}
                </div>

              </div>
              <div class="sixteen wide mobile tablet six wide computer column" id="carousel_text_div" style="position: relative;max-height: 310px !important">
              </div>
            </div>
          </div>
      @endif


      </div>
    </div>
    {{-- carousel ends --}}
    {{-- president words, articles latest news starts --}}
    <div class="ui segment" style="margin-top:0;">
      <div class="ui centered container grid" id="main_div" style="display: flex">
        <div class="sixteen wide tablet mobile four wide computer column"  id="president_word">
          <div class="ui fluid card" style="">
            <div class="content" style="border:0;!">
              <a href="{{url($lang.'/words')}}" class="header title_font test" style="font-size: 1.4em !important;{{$lang=='pa'?'line-height: 1.6 !important':''}}">{{trans('home.president_word')}}</a>
                @if ($word!=null)
                  <div class="image" style="margin-top:15px;">
                    <img style="width:100%;" src="{{asset('uploads/word/'.$word->image)}}" alt="">
                  </div>
                  <div>
                    <p class="description body_font" style="padding-top:3px;text-align:justify;margin-top:10px;font-size:1em !important;direction: {{$rtl}};">{{$word->$short_desc}}</p>
                  </div>
                @endif
            </div>
          </div>
        </div>
        <div class="sixteen wide tablet mobile seven wide computer column" id="latest_news">
          <div class="ui fluid card" style="">
            <div class="content" >
              <a href="{{url($lang.'/lattest_news')}}" class="header title_font test" style="font-size: 1.4em !important;{{$lang=='pa'?'line-height: 1.6 !important':''}}">{{trans('home.latest_news')}}</a>
              <div class="ui items">
                @if(sizeof($lattest_news)!=0)
                  @foreach($lattest_news as $item)
                    <?php
                     $route =  ($item->table_name=='documents')?asset('uploads/documents_'.$lang.'/'.$item->table_id.'.pdf'):'';
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
                        else if($item->type == 'infographic'){
                            $img = asset('uploads/infographics/'.$lang.'/'.$item->image_thumb);
                        }
                        else{
                          $img = asset($item->image_thumb);
                        }
                  ?>
                      <div class="news {{($item == $lattest_news->last())?'no_borders':''}} article_padding" style="border-bottom:1px dashed #ddd;">
                        <div class="ui stackable grid" style="display:flex;margin:0 !important;">
                          <div class="sixteen wide mobile tablet eleven wide computer column" id="news_title" style="padding-top:0;">
                            <a href="{{($item->table_name=='documents')?$route:url($lang.'/'.$item->type.'_details/'.$item->table_id)}}" class="ui {{$dir}} floated small header title_font title_to_be_trimmed" dir="rtl" style="margin:0">{{$item->$title}}</a>
                            <p class="meta" style="clear: both">
                              <i class="icon clock">
                              </i>{{$jdate->detailedDate($item->$date,$lang)}}
                            </p>
                            {{-- <div class="description body_font short_desc_to_be_trimmed" style="clear:both;">
                            {{str_limit($item->$short_desc,80)}}
                            </div> --}}
                          </div>
                          <div class="sixteen wide mobile tablet five wide computer column thumbnail news_image" id="news_image" style="">
                            <img style="min-width: 100%;{{$item->table_name=='infographics'?'width:100%;height:auto;':''}}" class="" src="{{$img}}" alt="">
                          </div>
                          <div class="desc">

                            <div class="" style="padding-bottom:15px;">
{{--                               <a href="{{($item->table_name=='documents')?$route:url($item->type.'_details/'.$item->table_id)}}" class="meta body_font" style="float:left;">{{trans('home.read_more')}}</a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach
                @endif

                <a href="{{url($lang.'/lattest_news')}}" class="body_font" style="font-size: 1.2em;color:#5f5d99;font-weight: bold;float: {{$indir}}">{{trans('home.read_all')}}</a>

              </div>
            </div>
          </div>
        </div>
        <div class="sixteen wide tablet mobile five wide computer column" id="articles">
          <div class="ui fluid card" style="">
            <div class="content" >
              <a href="{{url($lang.'/articles')}}" class="header title_font test" style="font-size: 1.4em !important;{{$lang=='pa'?'line-height: 1.6 !important':''}}">{{trans('home.articles')}}</a>
              <div class="ui items" style="margin-top:11px;">
              @if (sizeof($articles)!=0)
                @foreach($articles as $item)
                @if ($item->$title=='')
                  @php
                    continue;
                  @endphp
                @endif
                @if ($item->$title!=null)
                   <div class="article {{($item == $articles->last())?'no_borders':''}} article_padding" style="border-bottom:1px dashed #ddd;">
                     <div class="ui grid" style="display:flex;margin:0 !important;">
                       <div class="sixteen wide mobile tablet nine wide computer column" id="article_title" style="">
                         <a href="{{url($lang.'/article_details/'.$item->id)}}" class="ui {{$dir}} floated small header title_font title_to_be_trimmed" dir="rtl" style="margin:0" title="{{$item->$title}}">{{str_limit($item->$title,35)}}</a>
                         <p class="meta" style="clear:both;">
                           <i class="icon clock">
                           </i>{{$jdate->detailedDate($item->$date,$lang)}}
                         </p>
                       </div>
                       <div class="sixteen wide mobile tablet seven wide computer column thumbnail news_image" id="news_image" style="">
                         <img style="float:right;" class="" src="{{asset('uploads/article/'.$item->image_thumb)}}" alt="">
                       </div>
                     </div>

                   </div>

                @endif
                @endforeach
              @endif
                {{--
                @foreach($articles as $value)
                <div class="latest_articles">
                  <a href="{{url('news_details/'.$value->id)}}" class="ui small header title_font" style="display:block;padding-right:10px;">{{$value->$title}}</a>
                  <a href="{{url('news_details/'.$value->id)}}" class="meta body_font" style="float:{{$indir}}">{{$value->$date}}</a>
                </div>
                @endforeach --}}

                <a href="{{url($lang.'/articles')}}" class="body_font" style="font-size: 1.2em;color:#5f5d99;font-weight: bold;float: {{$indir}}">{{trans('home.read_all')}}</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- president words, articles latest news ends --}}

    {{-- social boxes, reports, video gallery starts--}}
    <div class="ui segment" id="social_segment">
      <div class="ui centered container grid" id="second_div" style="display: flex;">
        <div class="sixteen wide tablet mobile four wide computer column" id="social_div">
          <div class="ui fluid card" style="">
            <div class="content">
              <div class="ui stackable centered grid" style="margin-top:42px;">
                <div class="row" style="margin:10px;">
                  <div class="fb-page" data-href="https://www.facebook.com/ocs.afg/"  data-width="500" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ocs.afg/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ocs.afg/">‎ریاست عمومی دفتر مقام عالی ریاست جمهوری‎</a></blockquote></div>
                </div>
                <div class="row" style="margin:10px;">
                  <a class="twitter-follow-button" data-width="300" data-chrome="nofooter" data-show-count="false" data-height="200" href="https://twitter.com/OCS_AFG?ref_src=twsrc%5Etfw">Tweets by OCS_AFG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <a class="twitter-timeline" data-width="300" data-chrome="nofooter" data-height="200" href="https://twitter.com/OCS_AFG?ref_src=twsrc%5Etfw">Tweets by OCS_AFG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sixteen wide tablet mobile seven wide computer column" id="documents">
          <div class="ui fluid card" style="">
            <div class="content" >
              <a href="{{url($lang.'/documents')}}" class="header title_font test" style="">{{trans('home.reports_and_documents')}}</a>
              <div class="ui unstackable items" style="margin-top: 11px !important">
                @if(sizeof($documents)!=0)
                  @foreach($documents as $document)
                    @if($document->$title!=null)
                      <?php
                          $extension = \File::extension($document->$pdf);
                          if($extension=='xls' || $extension=='xlsx'){
                              $img = asset('assets/img/excel.png');
                          }
                          else if($extension=='doc'){
                           $img = asset('assets/img/doc.png');
                          }
                          else{
                            $img = asset('assets/img/pdf.png');
                          }
                      ?>
                      <div class="item {{($document==$documents->last())?'no_border':''}}" style="direction:{{$rtl}};border-bottom: 1px dashed #ddd;padding-bottom: 10px;">
                        <div class="ui tiny image icon" style="">
                          <a target="_blank" href="{{asset('uploads/documents_'.$lang.'/'.$document->$pdf)}}">
                          <img id="pdf_img" src="{{$img}}">
                          </a>
                        </div>
                        <div class="top aligned content docs" id="" style="">
                          <a class="ui {{$dir}} floated small header title_font" target="_blank" href="{{asset('uploads/documents_'.$lang.'/'.$document->$pdf)}}" style="">{{$document->$title}}</a>
                          <div class="meta body_font" style="clear:both;" dir="rtl">

                            <i class="icon time"></i>
                            {{$jdate->detailedDate($document->$date,$lang)}}</div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                @endif
                <a href="{{url($lang.'/documents')}}" class="body_font" style="font-size: 1.2em;color:#5f5d99;font-weight: bold;float: {{$indir}}">{{trans('home.read_all')}}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="sixteen wide tablet mobile five wide computer column" id="videos">
          <div class="ui fluid card" style="">
            <div class="content" style="border:0;!">
              <a href="{{url($lang.'/videos')}}" class="header title_font test" style="">{{trans('home.videos')}}</a>
              <div class="ui stackable grid" style="margin-top:11px;">
                @if (sizeof($videos))
                  @foreach($videos as $video)
                    @if($video->$title!=null)
                      <div class="row" style="">
                        <div class="column">
                          <div class="image"><iframe width="100%"  src="https://www.youtube.com/embed/{{$video->$url}}" frameborder="0" allowfullscreen></iframe></div>
                          <a href="{{url($lang.'/video_details/'.$video->id)}}" class="ui small header title_font" style="margin:0;padding:0;width:100%;">{{$video->$title}}</a>
                          <div class="meta body_font" dir="" style="">
                            <i class="icon time"></i>
                            {{$jdate->detailedDate($video->$date,$lang)}}</div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                @endif
                <a href="{{url($lang.'/videos')}}" class="body_font" style="font-size: 1.2em;color:#5f5d99;font-weight: bold;float: {{$indir}}">{{trans('home.read_all')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- social boxes, reports, video gallery ends--}}
   @include('include.home_footer')

   <script>



      $(document).ready(function(){
        var width = $(window).width();
        if(width<=450){
          $(".news_image").removeClass('thumbnail');
          $(".news_image").addClass('image');

          $(".article_image").removeClass('thumbnail');
          $(".article_image").addClass('image');
        }
      });

   </script>
