<?php
use App\Search;
  $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','article')->orderBy('date_'.$lang,'desc')->get();
	$articles = DB::table('media')->where('type','article')->whereNotNull('title_'.$lang)->orderBy('date_'.$lang,'desc')->take(5)->get();
?>
{{-- footer segment starts --}}
<div class="ui segment not-printable" style="background-color:#ddd;" >
  <div class="ui three column container stackable grid" style="margin-top:5px;" id="footer_parent">
    <div class="column" id="footer_three_menus">
      <div class="ui three column stackable grid" id="menus">
        <div class="column" id="footer_about">
          <a href="{{url($lang.'/ocs')}}" class="ui small header title_font footer_title">{{trans('menu.about_us')}}</a>
        </div>
        <div class="column" id="footer_media">
          <a href="{{url($lang.'/news')}}" class="ui header title_font footer_title">{{trans('menu.media')}}</a>
          {{-- <a href="{{url($lang.'/home')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;margin:5px 0;color:#565454 !important;">{{trans('menu.home')}}</a> --}}
          <a href="{{url($lang.'/news')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.news')}}</a>
          <a href="{{url($lang.'/articles')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.articles')}}</a>
          <a href="{{url($lang.'/infographics')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.infographics')}}</a>
          <a href="{{url($lang.'/documents')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.reports_and_documents')}}</a>
          <a href="{{url($lang.'/photo_albums')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.photo_albums')}}</a>
          <a href="{{url($lang.'/videos')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.videos')}}</a>
          <a href="{{url($lang.'/links')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0;color:#565454 !important;">{{trans('menu.links')}}</a>
        </div>
        <div class="column" id="footer_president">
          <a href="{{url($lang.'/biography')}}" class="ui header title_font footer_title">{{trans('menu.the_president')}}</a>
          <a href="{{url($lang.'/decrees')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.decrees')}}</a>
          <a href="{{url($lang.'/orders')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.orders')}}</a>
          <a href="{{url($lang.'/statements')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.statements')}}</a>
          <a href="{{url($lang.'/messages')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.messages')}}</a>
          <a href="{{url($lang.'/words')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.words')}}</a>
          <a href="{{url($lang.'/international_trips')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.international_trips')}}</a>
          <a href="{{url($lang.'/domestic_trips')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;color:#565454 !important;margin:5px 0">{{trans('menu.domestic_trips')}}</a>
          {{-- <a href="{{url($lang.'/biography')}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="width:100%;margin:5px 0">{{trans('menu.biography')}}</a> --}}
        </div>
      </div>
    </div>
    <div class="column" id="footer_news">
      <a href="{{url($lang.'/news')}}" class="ui header title_font footer_title" style="">{{trans('home.latest_news')}}</a>
      @if (sizeof($news)!=0)
        @foreach($news as $item)
          @if ($item->$title!=null)
          <?php $url =  ($item->table_name=='documents')?asset('uploads/documents_'.$lang.'/'.$item->table_id.'.pdf'):''; ?>
              <a href="{{($item->table_name=='documents')?$url:url($lang.'/'.$item->type.'_details/'.$item->table_id)}}" class="ui {{$dir}} floated tiny header body_font news_title footer_link" style="margin:9px 0;width:100%;color:#565454 !important">{{$item->$title}}</a>
          @endif
        @endforeach
      @endif


    </div>
    <div class="column" id="footer_articles">
      <a href="{{url($lang.'/articles')}}" class="ui header title_font footer_title" style="">{{trans('menu.articles')}}</a>
      @if (sizeof($articles) != 0)
        @foreach($articles as $article)
          @if ($article->$title!=null)
            <a href="{{url($lang.'/article_details/'.$article->id)}}" class="ui {{$dir}} floated tiny header body_font footer_link" style="margin:9px 0;width:100%;color:#565454 !important">{{$article->$title}}</a>
          @endif
        @endforeach

      @endif
    </div>
  </div>
</div>
{{-- footer segment ends --}}

{{-- lower footer starts --}}
<div class="ui segment not-printable" style="margin-top:0;">
  <div class="ui equal width centered container grid" id="footer_content">
    <div class="sixteen wide tablet mobile five wide computer column" style="text-align:{{$indir}}">
		<a href="http://prev.ocs.gov.af" target="_blank" style="color:blue;">{{trans('home.old_website')}}</a></div>
    <div class="sixteen wide tablet mobile five wide computer column" style="">
      <p style="margin-left:auto;margin-right:auto;text-align:center; white-space: nowrap;">Office of Chief Of Staff for the President<i class="copyright icon"></i> All Rights Reserved</p>
    </div>
    <div class="sixteen wide tablet mobile six wide computer column">
      <div class="ui centered grid" style="" id="footer_social_buttons">
        <div class="column" style="direction:ltr !important;">
          <a href="{{($lang=='en')?'https://www.facebook.com/AFG.OCS':'https://www.facebook.com/ocs.afg'}}" class="ui tiny circular basic icon button" id="footer_social_first_button">
            <i class="icon facebook f"></i>
          </a>
          <a href="https://twitter.com/OCS_AFG" target="_blank" class="ui tiny circular basic icon button">
            <i class="icon twitter"></i>
          </a>
          <a href="https://www.instagram.com/ocs.afg" target="_blank" class="ui tiny circular basic icon button">
            <i class="icon instagram"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCTwc5c4qoQC6uerwvPnUPzA" target="_blank" class="ui tiny circular basic icon button">
            <i class="icon youtube"></i>
          </a>
          <a href="{{url($lang.'/feed')}}" target="_blank" class="ui tiny circular basic icon button">
            <i class="icon rss"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@include('include.js_links')
  <script>


  //add to any script starts
  var a2a_config = a2a_config || {};
  a2a_config.prioritize = ["facebook", "twitter", "google_plus", "email", "print"];
  //add to any script ends



// menu bar responsiveness script starts
  $(document).ready(function(){

    // carousel script starts
    $('.owl-carousel').owlCarousel({
        items:1,
        dots:true,
        autoplayHoverPause:false,
        {{($lang=='en')?'rtl:true,':''}}
        loop:true,
        margin: 10,
        autoplay:true,
        // autoHeight:false,
        merge:true,
        dots:true,
        navSpeed:10000,
        autoplaySpeed:1000,
        // responsiveClass:true,
        // responsive: {
        //   0: {
        //     items:1,
        //     // loop:false
        //   },
        //   768: {
        //     items:1,
        //   }
        //
        // }
    });
    $('.owl-carousel blockquote').on('mouseover', function (e){
      $('.owl-carousel').trigger('stop.owl.autoplay');
    });
    $('.owl-carousel blockquote').on('mouseleave', function (e){
      $('.owl-carousel').trigger('play.owl.autoplay');
    });
    // carousel script ends

    // fixed menu script starts
     $('#menu_bar')
       .visibility({
         once: false,
         onBottomPassed: function() {
           $('.fixed.menu').transition('fade in');
			 $("#fixed").css('display','none');
         },
         onBottomPassedReverse: function() {
           $('.fixed.menu').transition('fade out');
         }
       })
     ;
    // fixed menu script ends


    var width = $(window).width();
   if(width<=1440 && width >1024) {
        // $('#arg').removeClass('six wide column');
        // $('#arg').addClass('four wide column');
    }
    else if(width >1440){
      // $('#arg').removeClass('six wide column');
      // $('#arg').addClass('three wide column');
        @if($lang=='en')
          $('#social').removeClass('eight wide column');
          $('#social').addClass('six wide column');
        @endif
    }

    if(width<990){
      $('.news_image').removeClass('thumbnail');
      $('.news_image>img').css('width','100%');
    }
    if(width<768) {
      $('#footer_content').removeClass('container');
      // $('#main').removeClass('centered');
      $('#main').removeClass('container');
    }


    //dropdown script
    $('.dropdown').dropdown({
        on: 'hover',allowAdditions:true,
      });
      $('.ui.accordion').accordion('refresh');
    });
// menu bar responsiveness script ends

$(document).ready(function() {
       $(".date_dr").pDatepicker({
        format : "YYYY - MM - DD"
      });
    });


// language switcher script starts
 $('.languageSwitcher').click(function () {
    var locale = $(this).prop('id');
    var _token  = $("input[name=_token]").val();
    var url = "{{request()->url()}}";

    var url_array = url.split("/");
    url_array[3] = locale;

    var redirectable_url = url_array.join("/");
	 $.ajax({
      url:"{{url('language')}}",
      type:"get",
      data:{locale:locale,_token:_token},
      datatype:"json",
      success: function(data){
        window.location.href=redirectable_url;
      },
      error: function(data){

      },
      beforeSend: function(data){

      },
    });

});

//language switcher script ends

// carousel text trimming i.e. title and short description
// carousel title trimming & ... concatenation
$('.news_title').text(function(index,currentText) {
 var  test = currentText.substr(0,145);
  if(test.length>144){
    test+='...';
    return test;
  }
  else{
    return;
  }
});

// carousel body trimming & ... concatenation
$('.carousel_text').text(function(index,currentText) {
 var  test = currentText.substr(0,185);
  if(test.length>184){
    test+='...';
    return test;
  }
  else{
    return;
  }
});

// short desc trimming i.e. title and short _description
// home title and short_desc  trimming & ... concatenation
$('.title_to_be_trimmed').text(function(index,currentText) {
 var  test = currentText.substr(0,91);
  if(test.length>90){
    test+='...';
    return test;
  }
  else{
    return;
  }
});
// short description trimming & ... concatenation
$('.short_desc_to_be_trimmed').text(function(index,currentText) {
 var  test = currentText.substr(0,165);
  if(test.length>164){
    test+='...';
    return test;
  }
  else{
    return;
  }
});

//
// $('.short_desc').text(function(index,currentText) {
//   return currentText.substr(0,170);
// });
// if($('.short_desc').text().length>169) {
//   $('.short_desc').append(' ...');
// }

//text trimming ends


//search expand on click
$('#search').click(function() {
  var display = $('#search_box').css('display');
  if(display=='none') {
    $('#search_box').css('display','block');
  }
  else {
    $('#search_box').css('display','none');
  }
});

$('#mobile_search').click(function() {
  var display = $('#mobile_search_box').css('display');
  $('.ui.accordion .content').removeClass('active');
  if(display=='none') {
    $('#mobile_search_box').css('display','block');
    $('#mobile_search_box').css('height','142px');
    $('#mobile_search_box').css('padding-top','65px');
  }
  else {
    $('#mobile_search_box').css('display','none');
  }
});
</script>
@stack('custom-js')
</body>
</html>
