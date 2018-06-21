
<div class="sixteen wide tablet mobile five wide computer column not-printable" >
  <div class="ui fluid card" style="">
    <div class="content" style="border:0;!">
      <div class="header title_font test" style="text-align:{{$dir}};margin-bottom:11px;padding-left:0;font-size: 1.5em !important;">
      {{trans('home.president_word')}}
    </div>
      @if (sizeof($word)!=0)
        <div class="image"><img style="width:100%;" src="{{asset('uploads/word/'.$word->image)}}" alt=""></div>
        <div class="description body_font" style="text-align:justify;margin-top:10px;padding-bottom:10px;" dir="rtl">{{$word->$short_desc}}</div>
      @endif
    </div>
  </div>
  <div class="ui fluid card">
    <div class="content">
      <a href="{{url($lang.'/lattest_news')}}" class="header title_font test" style="text-align:{{$dir}};margin-bottom:11px;">
      {{trans('home.latest_news')}}
    </a>
      @if (sizeof($news)!=0)
        @foreach($news as $item)
          @php
          if(sizeof($item->$title)==0)
            continue;
          @endphp
          <?php $route =  ($item->table_name=='documents')?asset('uploads/documents_'.$lang.'/'.$item->table_id.'.pdf'):''; ?>
          <div class="latest_articles {{($item==$news->last())?'no_border':''}}" style="padding:3px 0px;">
            <a href="{{($item->table_name=='documents')?$route:url($lang.'/'.$item->type.'_details/'.$item->table_id)}}" class="ui tiny header title_font" dir="rtl" style="text-align:{{$dir}};display: block;margin-bottom:0;">{{$item->$title}}</a>
            <div class="meta body_font" style="text-align:{{$dir}};" dir="rtl">
              <i class="icon clock"></i>
              {{$jdate->detailedDate($item->$date,$lang)}}</div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
  <div class="ui fluid card" style="padding: 0px !important">
    <div class="fb-page" data-href="https://www.facebook.com/{{($lang=='en')?'AFG.OCS':'ocs.afg'}}/" data-small-header="true" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/{{($lang=='en')?'AFG.OCS':'ocs.afg'}}/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AFG.OCS/">ریاست عمومی دفتر مقام عالی ریاست جمهوری‎</a></blockquote></div>
  </div>

    <div class="ui fluid card" style="">
    {{-- <div class="row" style=""> --}}
    <a class="twitter-follow-button" data-width="500" data-chrome="nofooter" data-height="200" data-show-count="false" href="https://twitter.com/OCS_AFG?ref_src=twsrc%5Etfw">Tweets by OCS_AFG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     <a class="twitter-timeline" data-width="500" data-chrome="nofooter" data-height="200" href="https://twitter.com/OCS_AFG?ref_src=twsrc%5Etfw">Tweets by OCS_AFG</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    {{-- </div> --}}
  </div>
</div>
